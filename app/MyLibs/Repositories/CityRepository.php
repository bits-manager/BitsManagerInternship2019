<?php 

namespace App\MyLibs\Repositories;

use App\MyLibs\Models\City;
use App\MyLibs\Repositories\BaseRepository;

class  CityRepository extends BaseRepository {

	protected $model;
	public function __construct(City $model)
	{
		$this->model = $model;
	}

}
     