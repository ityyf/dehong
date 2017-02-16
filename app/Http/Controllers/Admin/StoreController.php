<?php

namespace App\Http\Controllers\Admin;
//字符编码
header("content-type:text/html;charset=utf-8");

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
//use Request;
use DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Storage;
use App\Http\Requests;


class StoreController extends CommonController
{
     // 门店列表
     public function store_list(){
         $session = new session;
         $name = $session->get('admin_name');
         $info=DB::table('store')->simplePaginate($perPage = 5, $columns = ['*'], $pageName = 'page',$page='4');;
//          print_r($info);die;
        return view('Admin.Store.store_list',['store'=>$info,'name'=>$name]);
     }
      // 删除门店
     public  function store_del(Request $request){
         $data=$request->all();
         $s_id= $data['s_id'];
         $into = DB::table('store')->where('s_id', '=', $s_id)->delete();
//         echo $into;die;
         if($into!=false){
            echo 1;
         }else{
            echo 2;
         }
     }

     //门店新增
     public function store_add(){
         $session = new session;
         $name = $session->get('admin_name');
          return view('Admin.Store.store_add',['name'=>$name]);
     }

    //执行门店新增
    public function store_adds(Request $request)
    {
//       $info = $request->all();
        if ($request->isMethod('post')) {
            $info = $request->all();
            if ($info['s_img']->isValid()) {

                // 获取文件相关信息
                $originalName = $info['s_img']->getClientOriginalName(); // 文件原名
                $ext = $info['s_img']->getClientOriginalExtension();     // 扩展名
                $realPath = $info['s_img']->getRealPath();   //临时文件的绝对路径
                $type = $info['s_img']->getClientMimeType();     // image/jpeg

                // 上传文件
                $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
//                echo $filename;die;
                // 使用我们新建的uploads本地存储空间（目录）
                $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));

                if($bool==true){
                    $store_once = DB::table('store')->where('s_name','=',$info['s_name'])->get();
                   if($store_once==true){
                       echo    "<script>alert('商家不能重复添加');location.href='store_add';</script>";die;
                   }
                    if(preg_match_all("/^1[34578]\d{9}$/", $info['s_tel'])!=1){
                        echo    "<script>alert('手机号错误');location.href='store_add';</script>";die;
                    }
                    if(preg_match_all("/^((?!市).)*$/is",$info['s_address'])){
                        echo    "<script>alert('地区格式错误');location.href='store_add';</script>";die;
                    }
                      $insert_in=DB::table('store')->insert(
                        array('s_name' => $info['s_name'], 's_tel' => $info['s_tel'],'s_address'=>$info['s_address'],'s_desc'=>$info['s_desc'],'s_img'=>'/public/uploads/'.$filename)
                     );
                   if($insert_in){
                       echo    "<script>alert('成功');location.href='store_list';</script>";die;
                   }else{
                       echo    "<script>alert('失败');location.href='store_list';</script>";die;

                   }

                }

            }
        }
    }
}