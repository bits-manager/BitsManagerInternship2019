<?php 

namespace OnlineShopping\MyLibs\Repositories;

use OnlineShopping\MyLibs\Models\Attribute;
use OnlineShopping\MyLibs\Repositories\BaseRepository;

class AttributeRepository extends BaseRepository {

	protected $model;
	public function __construct(Attribute $model)
	{
		$this->model = $model;
	}
     public function getAttributeById($attributeId)
    {
      $sql = "SELECT  attributes.attribute_name, attributes.display_style,attributes.id from  attributes WHERE attributes.id = ?";
      $result = \DB::select($sql,[$attributeId]);
      return $result;
    }
      public function getName()
    {
        $sql = "SELECT  attributes.attribute_name from  attributes";
        $result = \DB::select($sql);
        return $result;
    }
    public function totalAttribute($shopID)
    {
      $sql="SELECT * from attributes WHERE shop_id=?";
      $res=\DB::select($sql,[$shopID]);
      return $res;
    }

    public function getAllByShopId($shopId)
    {
      return $this->model->where('shop_id',$shopId)->orderBy('attribute_name', 'asc')->get();
    }

    public function getAllByOptionId($shopId , $productId)
    {
      return $this->model->select('attributes.*')->join('options', 'options.attribute_id', '=', 'attributes.id')->join('inventory_option', 'inventory_option.option_id', '=', 'options.id')->join('inventories', 'inventories.id', '=', 'inventory_option.inventory_id')->where('inventories.product_id',$productId)->where('attributes.shop_id',$shopId)->groupBy('attributes.attribute_name')->orderBy('attributes.attribute_name', 'asc')->get();
    }

    public function getAllAttribute($shopId , $productId)
    {
      $sql = \DB::table('inventory_option')
            ->join('inventories', 'inventory_option.inventory_id', '=', 'inventories.id')
            ->join('products', 'inventories.product_id', '=', 'products.id')
            ->select('inventory_option.inventory_id', 'inventory_option.option_id')
            ->where('products.id',$productId)
            ->where('products.shop_id',$shopId)
            ->groupBy('inventory_option.inventory_id')
            ->get();
      return $sql;
    }

}