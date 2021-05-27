<?php

namespace App\Modules\Customer\Application\Services\Customer;

use App\Modules\Customer\Application\Resources\CustomerCollection;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerAddInputRepository;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerListInputRepository;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerRepository;

class CustomerService
{
    public function list(CustomerListInputService $data)
    {
        $repository = new CustomerRepository();
        $input = new CustomerListInputRepository($data->start, $data->limit, $data->keyword);
        return new CustomerCollection($repository->list($input));
    }

    public function add(CustomerAddInputService $data)
    {
        $repository = new CustomerRepository();
        $input = new CustomerAddInputRepository($data->name, $data->phone_number, $data->status);
        return $repository->add($input);
    }
}
