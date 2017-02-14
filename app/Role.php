<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Roule extends Model
{
	//指定表名
    protected $table='student';
	//指定允许批量赋值字段
    protected $fillable=['r_name','r_desc'];
}


