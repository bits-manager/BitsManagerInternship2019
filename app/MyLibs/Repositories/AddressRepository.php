<?php 

namespace App\MyLibs\Repositories;

use App\MyLibs\Models\Address;
use App\MyLibs\Repositories\BaseRepository;

class AddressRepository extends BaseRepository {

  protected $model;
  public function __construct(Address $model)
  {
    $this->model = $model;
  }
    

}