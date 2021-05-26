<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;

use App\Models\Customer;
use App\Modules\Customer\Application\Services\Customer\CustomerListInputService;

class CustomerRepository
{
    //
    public function list(CustomerListInputService $data)
    {
        return Customer::all()->where('id', '>=', $data->start)->sortBy('id')->skip($data->start)->take($data->limit);
    }
}
