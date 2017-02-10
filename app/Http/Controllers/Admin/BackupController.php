<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;
class BackupController extends CommonController
{
    //所有表展示
    public function backup_list(){
      
        $rs = DB::select('SHOW TABLES FROM cms');
        return view('Backup.backup_list',['rs'=>$rs]);
    }

}