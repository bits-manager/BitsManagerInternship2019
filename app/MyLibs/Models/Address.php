<?php

namespace App\MyLibs\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{     
	protected $table='addresses';        
	protected $fillable = ['id','address','phone','email','status'];
      //
}
