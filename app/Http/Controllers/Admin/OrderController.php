<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class OrderController extends CommonController
{
 	/**
 	 * 订单列表
 	 *
 	 * @author 梦境
 	 * @return void
 	 */
    public function order_list(){
		$data = Input::get();
		$where = [];
		$order_list = DB::table('order');

		//判断产品名
		if (!empty($data['name']))
		{
			$where['name'] = $data['name'];
			$order_list->where('p_name', 'like', '%'.trim($data['name']).'%');
		}

		//判断开始时间
		if (!empty($data['addtime']))
		{
			$where['addtime'] = $data['addtime'];
			$order_list->where('order.addtime','>=',strtotime($data['addtime']));
		}

		//判断结束时间
		if (!empty($data['oldtime']))
		{
			$where['oldtime'] = $data['oldtime'];
			$order_list->where('order.addtime','<=',strtotime($data['oldtime']));
		}
		$order = $order_list->join('product','order.p_id','=','product.p_id')
    					->select('order.*','product.p_name')
						->orderBy('o_id','desc')
    					->paginate(3);
        return view('admin.Order.order_list',['order_list'=>$order,'search'=>$where]);
    }

	/**
	 * 删除订单
	 *
	 * @author 梦境
	 * @param  int $id 订单编号
	 * @return void
	 */
	public function order_del($id)
	{
		$re = DB::table('order')->where(['o_id'=>$id])->delete();
		if ($re)
		{
			return redirect('admin/order_list');
		}
	}
	
	public function order_detail()
	{
		$id = Input::get('id');
		echo $id;
		return view('admin.Order.order_detail');
	}
}