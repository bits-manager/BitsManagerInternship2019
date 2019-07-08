<?php

namespace App\MyLibs\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
	protected $table='event_types';
	protected $fillable = ['id','event_name'];
    
/*public function halls()
    {
    	return $this->belongsToMany('App\MyLibs\Models\Hall','event_type_halls','eventType_id','hall_id');
    }*/
}
