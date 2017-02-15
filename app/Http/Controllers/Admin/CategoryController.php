<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use PhpParser\Node\Scalar\DNumber;
use Storage;
use App\Http\Requests;

class CategoryController extends CommonController
{
    public $result = [
        'title'=>'提示信息',
        'msg'=>'',
        'url'=>'',
        'wait'=>3
    ];
    public function category_list()
    {
        $cate_list = DB::table('category')->orderBy('c_type','asc')->get();
        return view('admin.Category.category_list',['cate_list'=>$cate_list]);
    }
    
    public function category_add()
    {
        return view('admin.Category.category_add');
    }

    public function category_add_exec()
    {
        $data = Input::get();

        $this->result['msg'] = '分类添加成功';
        $this->result['url'] = 'category_list';
        $re = $cate = DB::table('category')->insert($data);
        if ($re)
        {
            return view('admin.Product.message',$this->result);
        }
    }

    public function category_del()
    {
        $id = Input::get('id');
        $type = DB::table('category')->where(['c_id'=>$id])->value('c_type');
        if ($type == 1)
        {
            $result = DB::table('product')->where(['c_id'=>$id])->get();
        }
        else
        {
            $result = DB::table('news')->where(['c_id'=>$id])->get();
        }
        if (empty($result))
        {
            $re = $cate = DB::table('category')->where(['c_id'=>$id])->delete();
            echo $re;
        }
        else
        {
            echo 0;
        }
    }

    public function category_edit()
    {
        $id = Input::get('id');
        $cate_info = DB::table('category')->where(['c_id'=>$id])->first();
        return view('admin.Category.category_edit',['cate_info'=>$cate_info]);
    }
    
    public function category_edit_exec()
    {
        $data = Input::get();
        $cate = DB::table('category')
                    ->where(['c_id'=>$data['c_id']])
                    ->update(['c_name'=>$data['c_name'],'c_type'=>$data['c_type']]);
        if ($cate)
        {
            $this->result['msg'] = '分类修改成功';
            $this->result['url'] = 'category_list';
            return view('admin.Product.message',$this->result);
        }

    }


}