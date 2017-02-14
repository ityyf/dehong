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

    /**
     * 产品添加
     *
     * @author 梦境
     * @return void
     */
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

            //产品详情入库
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
    
    /**
     * 产品展示
     *
     * @author 梦境
     * @return [type] [description]
     */
    public function product_list()
    {
    	 //产品分类
        $cate_list = DB::table('category')->select('c_id','c_name')->where(['c_type'=>1])->get();
        //产品信息
        $product_list = DB::table('product')
                        ->where('is_del','=',1)
                        ->orderBy('p_id','desc')
                        ->paginate(3);
         return view('admin.Product.product_list',['product_list'=>$product_list]);
    }

    /**
     * 批量加入回收站
     *
     * @author 梦境
     * @return $re  int
     */
    public function product_dels()
    {
        $ids = Input::get('ids');
        $ids = explode(',',substr($ids,0,strlen($ids)-1));
        $re = DB::table('product')->whereIn('p_id',$ids)->update(['is_del' => 0]);;
        echo $re;
    }

    /**
     * 产品状态即点击该
     *
     * @author 梦境
     * @return $re  int
     */
    public function product_edit()
    {
        $data = Input::get();
        $product = DB::table('product')->where(['p_id'=>$data['p_id']]);
        switch ($data['val']) 
        {
        	case 1 : switch ($data['key']) 
        	{
        		case 'is_sell':
        			$re = $product->update(['is_sell'=>0]);
        			break;
                case 'is_new':
                    $re = $product->update(['is_new'=>0]);
        			break;
                case 'is_hot':
                    $re = $product->update(['is_hot'=>0]);
        			break;
        	}break;
        	case 0 : switch ($data['key']) 
        	{
                case 'is_sell':
                    $re = $product->update(['is_sell'=>1]);
                    break;
                case 'is_new':
                    $re = $product->update(['is_new'=>1]);
                    break;
                case 'is_hot':
                    $re = $product->update(['is_hot'=>1]);
                    break;
        	}break;
        }
        echo $re;
       
    }


    /**
     * 图片上传
     *
     * @author 梦境
     * @param  array $file 图片信息
     * @return string      上传后的路径
     */
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