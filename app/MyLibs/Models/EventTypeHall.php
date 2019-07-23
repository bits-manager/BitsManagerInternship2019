0<?php

namespace App\MyLibs\Models;

use Illuminate\Database\Eloquent\Model;

class EventTypeHall extends Model
{ 
	protected $table='event_type_halls';
	protected $fillable = ['id','image','description','hall_id','eventType_id'];
    //
}
