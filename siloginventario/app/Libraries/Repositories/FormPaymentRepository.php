<?php namespace App\Libraries\Repositories;

use App\Models\FormPayment;
use Bosnadev\Repositories\Eloquent\Repository;
use Schema;
use Symfony\Component\HttpKernel\Exception\HttpException;

class FormPaymentRepository extends Repository
{

    /**
    * Configure the Model
    *
    **/
    public function model()
    {
      return 'App\Models\FormPayment';
    }

	public function search($input)
    {
        $query = FormPayment::query();

        $columns = Schema::getColumnListing('formPayments');
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
            throw new HttpException(1001, "FormPayment not found");
        }

        return $model;
    }

    public function apiDeleteOrFail($id)
    {
        $model = $this->find($id);

        if(empty($model))
        {
            throw new HttpException(1001, "FormPayment not found");
        }

        return $model->delete();
    }
}
