<?php 

namespace App\MyLibs\Repositories;

use App\MyLibs\Models\Hall;
use App\MyLibs\Repositories\BaseRepository;

class  HallRepository extends BaseRepository {

	protected $model;
	public function __construct(Hall $model)
	{
		$this->model = $model;
	}

}
 