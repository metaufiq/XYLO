<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;

use App\Models\Customer;
use App\Modules\Customer\Application\Services\Customer\CustomerListInputService;
use App\Modules\Customer\Domain\Models\Customer as ModelsCustomer;

class CustomerRepository
{
    //
    public function list(CustomerListInputRepository $data)
    {
        return Customer::all()->where('id', '>=', $data->start)->sortBy('id');
    }
    public function add(CustomerAddInputRepository $data)
    {
        $customer = new ModelsCustomer();
        $customer->name = $data->name;
        $customer->phone_number = $data->phone_number;
        $customer->status = $data->status;
        return $customer->save();
    }
}
