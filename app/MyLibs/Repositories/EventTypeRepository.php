<?php 

namespace App\MyLibs\Repositories;

use App\MyLibs\Models\EventType;
use App\MyLibs\Repositories\BaseRepository;


class  EventTypeRepository extends BaseRepository {

	protected $model;
	public function __construct( EventType $model)
	{
		$this->model = $model;
	}
   }