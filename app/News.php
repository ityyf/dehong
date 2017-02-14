<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

	//指定表名
    protected $table='news';
    //指定允许批量赋值字段
    protected $fillable=['n_title','c_id','n_content','n_addtime','n_author'];
}