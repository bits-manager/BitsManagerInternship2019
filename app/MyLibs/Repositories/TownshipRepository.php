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
	/*public function gettownships($id)
	{
		$sql = "SELECT * FROM `townships` WHERE city_id=?";
		$res = \DB::select($sql,[$id]);
		return $res;

		
	}*/

}
     

