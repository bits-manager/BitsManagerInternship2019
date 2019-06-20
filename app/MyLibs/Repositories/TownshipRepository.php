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
}