<?php

namespace App\Http\Controllers\Admin;
//字符编码
header("content-type:text/html;charset=utf-8");

use Illuminate\Http\Request;
use DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Storage;
use App\Http\Requests;



class FirmController extends CommonController{
    //企业文化列表页
    public function firm_list(){
        $session = new session;
        $name = $session->get('admin_name');
        $info=DB::table('firm')->get();
        return view('admin.firm.firm_list',['info'=>$info,'name'=>$name]);
    }
   //企业添加页面
    public function firm_add(){
        $session = new session;
        $name = $session->get('admin_name');
      return view('admin.firm.firm_add',['name'=>$name]);
    }
   // 企业添加操作
    public function firm_adds(Request $request)
    {
        $data = $request->all();
//        print_r($data);die;
        if ($data['f_img']->isValid()){
            // 获取文件相关信息
            $originalName = $data['f_img']->getClientOriginalName(); // 文件原名
            $ext = $data['f_img']->getClientOriginalExtension();     // 扩展名
            $realPath = $data['f_img']->getRealPath();   //临时文件的绝对路径
            $type = $data['f_img']->getClientMimeType();     // image/jpeg
            $type = substr($type,0,5);
            if($type!='image'){
                echo    "<script>alert('上传文件格式错误，请确认图片格式');location.href='firm_add';</script>";die;
            }
            // 上传文件
            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
//                echo $filename;die;
            // 使用我们新建的uploads本地存储空间（目录）
            $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
//            var_dump($bool);
         }
        if ($data['f_video']->isValid()){
            // 获取文件相关信息
            $originalNames = $data['f_video']->getClientOriginalName(); // 文件原名
            $exts = $data['f_video']->getClientOriginalExtension();     // 扩展名
            $realPaths = $data['f_video']->getRealPath();   //临时文件的绝对路径
            $types = $data['f_video']->getClientMimeType();     // image/jpeg
            $types = substr($types,0,5);
            if($types!='video'){
                echo    "<script>alert('上传文件格式错误，请确认视频格式');location.href='firm_add';</script>";die;
            }
//            echo $types;die;
            // 上传文件
            $filenames = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $exts;
//                echo $filename;die;
            // 使用我们新建的uploads本地存储空间（目录）
            $bools = Storage::disk('uploads')->put($filenames, file_get_contents($realPaths));
//            var_dump($bools);die;
        }
        if($bools==true&&$bool==true){
            if(preg_match_all("/^1[34578]\d{9}$/", $data['f_phone'])!=1){
                echo    "<script>alert('手机号错误');location.href='firm_add';</script>";die;
            }
            if(preg_match_all("/^([0-9]{3,4}-)?[0-9]{7,8}$/", $data['f_tel'])!=1){
                echo    "<script>alert('电话号错误');location.href='firm_add';</script>";die;
            }
            if(preg_match_all("/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i",$data['f_email'])!=1){
                echo    "<script>alert('邮箱格式错误');location.href='firm_add';</script>";die;
            }
//            if(preg_match_all("(?i)\b((?:[a-z][\w-]+:(?:/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'\".,<>?«»“”‘’]))",$data['f_url'])!=1){
//                echo    "<script>alert('网页地址错误');location.href='firm_add';</script>";die;
//            }
            $insert_in=DB::table('firm')->insert(
                array('f_logo'=>'/public/uploads/'.$filename,'f_video'=>'/public/uploads/'.$filenames,
                     'f_nickname'=>$data['f_nickname'], 'f_name'=>$data['f_name'],
                    'f_tel'=>$data['f_tel'], 'f_phone'=>$data['f_phone'], 'f_contact'=>$data['f_contact'],
                    'f_email'=>$data['f_email'], 'f_url'=>$data['f_url'], 'f_address'=>$data['f_address']
                    )
            );
            if($insert_in==1){
                echo    "<script>alert('成功');location.href='firm_list';</script>";die;
            }
        }
    }

    // 公司简介页面
    public function firm_lists(Request $request){
        $session = new session;
        $name = $session->get('admin_name');
        $inf = $request->all();
//        print_r($info);die;
        $info=DB::table('firm')->where('f_id','=',$inf['f_id'])->get();
//        print_r($info);die;
        return view('admin.firm.firm_lists',['info'=>$info,'name'=>$name]);
    }

   //修改页面
    public function firm_update(Request $request){
        $session = new session;
        $name = $session->get('admin_name');
        $inf = $request->all();
        if($inf==false){
            echo    "<script>alert('没查询到要修改的数据');location.href='firm_list';</script>";die;
        }
        $info=DB::table('firm')->where('f_id','=',$inf['f_id'])->get();
//        print_r($info);die;
        return view('admin.firm.firm_update',['info'=>$info,'name'=>$name]);
    }
    
     //执行修改
     public  function firm_updates(Request $request){
         $data = $request->all();
//         print_r($data);die;
         if(!array_key_exists("f_nickname",$data)){
             $data['f_nickname']="";
         }
         if(!array_key_exists("f_img",$data)){
             $data['f_img']="";
         }
         if(!array_key_exists("f_video",$data)){
             $data['f_video']="";
         }
//         print_r($data);die;
         //图片上传
         if($data['f_img']!=""){
         if ($data['f_img']->isValid()){
             // 获取文件相关信息
             $originalName = $data['f_img']->getClientOriginalName(); // 文件原名
             $ext = $data['f_img']->getClientOriginalExtension();     // 扩展名
             $realPath = $data['f_img']->getRealPath();   //临时文件的绝对路径
             $type = $data['f_img']->getClientMimeType();     // image/jpeg
             $type = substr($type,0,5);
             if($type!='image'){
                 echo    "<script>alert('上传文件格式错误，请确认图片格式');location.href='firm_add';</script>";die;
             }
             // 上传文件
             $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
//                echo $filename;die;
             // 使用我们新建的uploads本地存储空间（目录）
             $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
//            var_dump($bool);die;
         }
         }

         //上传视频
         if($data['f_video']==true) {
             if ($data['f_video']->isValid()) {
                 // 获取文件相关信息
                 $originalNames = $data['f_video']->getClientOriginalName(); // 文件原名
                 $exts = $data['f_video']->getClientOriginalExtension();     // 扩展名
                 $realPaths = $data['f_video']->getRealPath();   //临时文件的绝对路径
                 $types = $data['f_video']->getClientMimeType();     // image/jpeg
                 $types = substr($types, 0, 5);
                 if ($types != 'video') {
                     echo "<script>alert('上传文件格式错误，请确认视频格式');location.href='firm_add';</script>";
                     die;
                 }
//            echo $types;die;
                 // 上传文件
                 $filenames = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $exts;
//                echo $filename;die;
                 // 使用我们新建的uploads本地存储空间（目录）
                 $bools = Storage::disk('uploads')->put($filenames, file_get_contents($realPaths));
//            var_dump($bools);die;
             }
         }
         $sql="f_name = '$data[f_name]',f_tel = '$data[f_tel]',
         f_phone = '$data[f_phone]',f_contact = '$data[f_contact]',
         f_email = '$data[f_email]',f_url = '$data[f_url]',f_address ='$data[f_address]'";
         if($data['f_img']!=""){
                   $sql.=','."f_logo = '/public/uploads/$filename'";
         }
         if($data['f_video']!=""){
                $sql.=','."f_video = '/public/uploads/$filenames'";
         }
         if($data['f_nickname']!=""){
             $data['f_nickname']= str_replace("'",'yugege',$data['f_nickname']);
                   $sql.=','."f_nickname = '$data[f_nickname]'";
         }
//         echo $sql;die;
//         echo "<br/>";
//         echo $sql;die;
         $info = DB::update("update dh_firm SET $sql where f_id = $data[f_id]");
//         var_dump($info);die;
         if($info){
             echo "<script>alert('修改成功');location.href='firm_list';</script>";
         }else{
             echo "<script>alert('修改失败');location.href='firm_list';</script>";

         }
//         print_r($info);
     }



}
