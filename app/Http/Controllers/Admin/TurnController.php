<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use Storage;
use App\Http\Requests;



class TurnController extends CommonController
{
    //轮播展示页面
    public function turn_list()
    {
        $info = DB::table('album')->orderby('a_order','DESC')->take(6)->get();
//        print_r($info);die;
        return view('Admin.turn.turn_list',['info'=>$info]);
    }
    //轮播展示页面
    public function turn_add()
    {
        return view('Admin.turn.turn_add');
    }
    //轮播图上传
    public function turn_adds(Request $request)
    {
//        echo 1;die;
        if ($request->isMethod('post'))
        {
            $info = $request->all();
//            print_r($info);
//            die;
            $img  = DB::table('album')->where('a_type','=','3')->count();
            if($img>6){
                echo    "<script>alert('最多轮播6张图片,请删除一张后添加');location.href='turn_list';</script>";die;
            }
//            echo $img;die;
            if ($info['turn_img']->isValid())
            {

                // 获取文件相关信息
                $originalName = $info['turn_img']->getClientOriginalName(); // 文件原名
                $ext = $info['turn_img']->getClientOriginalExtension();     // 扩展名
                $realPath = $info['turn_img']->getRealPath();   //临时文件的绝对路径
                $type = $info['turn_img']->getClientMimeType();     // image/jpeg

                // 上传文件
                $filename = 'turn'.uniqid() . '.' . $ext;
//                echo $filename;die;
                // 使用我们新建的uploads本地存储空间（目录）
                $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                if($bool==true)
                {
                    $insert_in=DB::table('album')->insert(
                        array('a_order' =>$info['turn_order'], 'a_desc' =>$info['turn_desc'],'a_type'=>$info['turn_type'],'a_url'=>'/public/uploads/'.$filename)
                    );
                   if($insert_in){
                       echo    "<script>alert('成功');location.href='turn_add';</script>";die;
                   }else{
                       echo    "<script>alert('失败');location.href='turn_add';</script>";die;

                   }
                }

            }
        }
    }

//    图片放入轮播首张
    public function turn_img_first(Request $request)
    {
        $id = $request->all();
//        echo $id['a_id'];
        $info = DB::table('album')->orderby('a_order','DESC')->take(1)->get();
//       print_r($info);die;
        $new_order= $info[0]->a_order+1;
//       echo  $new_order;
        $onhand = DB::table('album')
            ->where('a_id', $id['a_id'])
            ->update(array('a_order' => $new_order));
         if($onhand){
             echo    "<script>alert('放入成功');location.href='turn_list';</script>";
         }else{
             echo    "<script>alert('放入失败，请稍后再试');location.href='turn_list';</script>";
         }

    }

    //    删除图片
    public function turn_img_del(Request $request)
    {
        $id = $request->all();
        $godie = DB::table('album')->where('a_id', '=', $id['a_id'])->delete();
        if($godie){
            echo    "<script>alert('删除成功');location.href='turn_list';</script>";
        }else{
            echo    "<script>alert('删除失败，请稍后再试');location.href='turn_list';</script>";
        }
    }
}