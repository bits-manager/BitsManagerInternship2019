<?php

namespace App\MyLibs\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table='cities';
	protected $fillable = ['id','city_name','state_id'];
    //
}
