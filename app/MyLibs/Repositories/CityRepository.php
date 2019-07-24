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

	public function getcity($id)
	{
		$sql = "SELECT * FROM `cities` WHERE state_id=?";
		$res = \DB::select($sql,[$id]);
		return $res;
	}

}
     