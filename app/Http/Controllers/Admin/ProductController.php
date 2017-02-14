<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Storage;
use App\Http\Requests;

class ProductController extends CommonController
{
    
    /**
     * 产品添加页面
     *
     * @author 梦境
     * @return void
     */
    public function product_add()
    {
        //产品分类
        $cate_list = DB::table('category')->select('c_id','c_name')->where(['c_type'=>1])->get();
        
        return view('admin.Product.product_add',['cate_list'=>$cate_list]);
    }

    public function product_add_exec()
    {
        $file = Input::file('a_url');
        $data = Input::get();
        //返回提示信息
        $result = [
            'title'=>'提示信息',
            'msg'=>'',
            'url'=>'',
            'wait'=>3
        ];

        //产品基本信息
        $product = [
            'p_name'=>$data['p_name'],
            'c_id'=>$data['c_id'],
            'price'=>$data['price'],
            'num'=>$data['num'],
            'is_hot'=>$data['is_hot'],
            'is_new'=>$data['is_new'],
            'p_desc'=>$data['p_desc'],
            'is_sell'=>$data['is_sell'],
            'is_offer'=>$data['is_offer'],
            'addtime'=>time(),
        ];
        if (empty($data['p_sn']))
        {
            $product['p_sn'] = 'dh_'.time();
        }
        else
        {
            $product['p_sn'] = $data['p_sn'];
        }
        $productId = DB::table('product')->insertGetId($product);
        if ($productId != 0)
        {
            //添加产品相册
            //图片路径
            $album = [];
            $num = count($file);
            for ($i=0;$i<$num;$i++)
            {
                $album[$i]['a_url'] = $this->uploads($file[$i]);
                $album[$i]['a_type'] = 1;
                $album[$i]['a_desc'] = $data['a_desc'];
                $album[$i]['p_id'] = $productId;
            }
            //产品相册入库
            $album_info = DB::table('album')->insert($album);

            //产品详情
            $detail = [
                'd_offer'=>$data['d_offer'],
                'promise'=>$data['promise'],
                'aftermarket'=>$data['aftermarket'],
                'detail'=>$data['detail'],
                'p_id'=>$productId,
            ];
            $detail_info = DB::table('pro_detail')->insert($detail);
            if ($album_info != 0 && $detail_info != 0)
            {
                $result['msg'] = '添加产品成功';
                $result['url'] = 'product_list';
                return view('admin.Product.message',$result);
            }
            else
            {
                $result['msg'] = '添加产品失败';
                $result['url'] = 'product_add';
                return view('admin.Product.message',$result);
            }
        }
        else
        {
            $result['msg'] = '添加产品失败';
            $result['url'] = 'product_add';
            return view('admin.Product.message',$result);
        }
    }
    
    public function uploads($file)
    {
        if ($file->isValid()) {

            // 获取文件相关信息
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            $type = $file->getClientMimeType();     // image/jpeg

            // 上传文件
            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
            // 使用我们新建的uploads本地存储空间（目录）
            $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
            return '/public/uploads/'.$filename;

        }

    }


}

?>