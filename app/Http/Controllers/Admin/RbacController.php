<?php

namespace App\Http\Controllers\Admin;

use Request;
use DB;
use App\Role;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class RbacController extends CommonController
{

	//角色列表
	public function role_list()
	{
		$role_list=DB::table('role')->get();
		return view('Admin.Rbac.role_list',['role_list'=>$role_list]);
	}

	//角色添加
	public function role_add()
	{
		return view('Admin.Rbac.role_add');
	}

	//角色添加执行
	public function role_data(Request $request)
	{
		$validator=\Validator::make(Input::get(),[
                'role.r_name'=>'required|min:2|max:10',
                'role.r_desc'=>'required',
            ],[
                'required'=>':attribute 为必填项',
            ],[
               'role.r_name'=>'角色名称',
                'role.r_desc'=>'角色描述',
            ]);
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator);
            }
		// $this->validate($request,[
		// 	'role.r_name'=>'required|min:2|max:10',
		// 	'role.r_desc'=>'required',
		// 	],[
  //               'required'=>':attribute 必填',
  //           ],[
  //               'role.r_name'=>'角色名称',
  //               'role.r_desc'=>'角色描述',
  //           ]);
		$data=Input::get('role');
		$r_name=$data['r_name'];
		$r_desc=$data['r_desc'];
		$res=DB::table('role')->insert(['r_name'=>$r_name,'r_desc'=>$r_desc]);
		if($res)
		{
			echo "<script>alert('角色添加成功');location.href='role_list';</script>";
		}else{
			echo "<script>alert('角色添加失败');location.href='role_add';</script>";
		}
	}

	//角色删除
	public function role_delete($r_id)
	{
		$res=DB::table('role')->where(['r_id'=>$r_id])->delete();
		if($res)
		{
			echo "<script>alert('角色删除成功');self.location=document.referrer;</script>";
		}else{
			echo "<script>alert('角色删除失败');self.location=document.referrer;</script>";
		}
	}

	//角色编辑
	public function role_editor($r_id)
	{
		$data=DB::table('role')->where(['r_id'=>$r_id])->first();
		return view('Admin.Rbac.role_editor',['data'=>$data]);
	}

	//角色编辑执行
	public function role_update($r_id)
	{
		$r_name=Input::get('r_name');
		$r_desc=Input::get('r_desc');
		$res=DB::table('role')->where(['r_id'=>$r_id])
		->update([
			'r_name'=>$r_name,
			'r_desc'=>$r_desc
			]);
		if($res)
		{
			echo "<script>alert('角色修改成功');self.location=document.referrer;</script>";
		}else{
			echo "<script>alert('角色修改失败');self.location=document.referrer;</script>";
		}
	}


}