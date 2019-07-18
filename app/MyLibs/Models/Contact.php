<?php

namespace App\MyLibs\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $table='contacts';
	protected $fillable = ['id','contact_name','email','subject','message'];
    //
}
