<?php

namespace App\MyLibs\Models;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
	protected $table='townships';
	protected $fillable = ['id','township_name','city_id','state_id'];
    //
}
