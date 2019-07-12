<?php 

namespace App\MyLibs\Repositories;

use App\MyLibs\Models\EventTypeHall;
use App\MyLibs\Repositories\BaseRepository;

class  EventHallRepository extends BaseRepository {

	protected $model;
	public function __construct(EventTypeHall $model)
	{
		$this->model = $model;
	}

}
     