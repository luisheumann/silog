<?php namespace App\Libraries\Repositories;

use App\Models\PurchaseOrder;
use Bosnadev\Repositories\Eloquent\Repository;
use Schema;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PurchaseOrderRepository extends Repository
{

    /**
    * Configure the Model
    *
    **/
    public function model()
    {
      return 'App\Models\PurchaseOrder';
    }

	public function search($input)
    {
        $query = PurchaseOrder::query();

        $columns = Schema::getColumnListing('purchaseOrders');
        $attributes = array();

        foreach($columns as $attribute)
        {
            if(isset($input[$attribute]) and !empty($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] = $input[$attribute];
            }
            else
            {
                $attributes[$attribute] =  null;
            }
        }

        return [$query->get(), $attributes];
    }

    public function apiFindOrFail($id)
    {
        $model = $this->find($id);

        if(empty($model))
        {
            throw new HttpException(1001, "PurchaseOrder not found");
        }

        return $model;
    }

    public function apiDeleteOrFail($id)
    {
        $model = $this->find($id);

        if(empty($model))
        {
            throw new HttpException(1001, "PurchaseOrder not found");
        }

        return $model->delete();
    }
}
