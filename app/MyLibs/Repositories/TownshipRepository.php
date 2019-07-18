<?php 

namespace App\MyLibs\Repositories;

use App\MyLibs\Models\Township;
use App\MyLibs\Repositories\BaseRepository;


class TownshipRepository extends BaseRepository {


	protected $model;
	public function __construct(Township $model)
	{
		$this->model = $model;
	}
	public function gettownship($state_id,$city_id)
	{
		$sql = "SELECT * FROM `townships` WHERE state_id=? AND city_id=?";
		$res = \DB::select($sql,[$state_id,$city_id]);

		return $res;
	}
}
     

