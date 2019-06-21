<?php 

namespace App\MyLibs\Repositories;

use App\MyLibs\Models\Contact;
use App\MyLibs\Repositories\BaseRepository;

class  ContactRepository extends BaseRepository {

	protected $model;
	public function __construct(Contact $model)
	{
		$this->model = $model;
	}

}
     