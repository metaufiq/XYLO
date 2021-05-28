<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;

use App\Modules\Customer\Application\Resources\CustomerResource;
use App\Modules\Customer\Application\Services\Customer\CustomerListInputService;
use App\Modules\Customer\Domain\Models\Customer;;

class CustomerRepository
{
    //
    public function list(CustomerListInputRepository $data)
    {
        return Customer::all()->where('id', '>=', $data->start)->sortBy('id');
    }
    public function add(CustomerAddInputRepository $data)
    {
        $customer = new Customer();
        $customer->name = $data->name;
        $customer->phone_number = $data->phone_number;
        $customer->status = $data->status;
        return $customer->save();
    }
    public function edit(CustomerEditInputRepository $data)
    {
        $customer = Customer::find($data->id);
        $customer->name = $data->name;
        $customer->phone_number = $data->phone_number;
        $customer->status = $data->status;

        return $customer->save();
    }
}
