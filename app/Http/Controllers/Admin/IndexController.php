<?php

namespace App\Http\Controllers\Admin;

use Request;
use DB;
class IndexController extends CommonController
{
    public function index(){
        return view('admin.Index.index');
    }
}