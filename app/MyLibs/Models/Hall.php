<?php

namespace App\MyLibs\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
	protected $table='halls';
	protected $fillable = ['id','image','hall_name','address','phone_no','open_time','close_time','city_id','state_id','township_id'];
    //
}
