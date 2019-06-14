<?php 

namespace App\MyLibs\Repositories;

use App\MyLibs\Models\State;
use App\MyLibs\Repositories\BaseRepository;

class StateRepository extends BaseRepository {

  protected $model;
  public function __construct(State $model)
  {
    $this->model = $model;
  }
    

}