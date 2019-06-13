<?php

namespace App\MyLibs\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
	protected $table='event_types';
	protected $fillable = ['id','event_name'];
    //
}
