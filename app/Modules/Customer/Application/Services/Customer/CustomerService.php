<?php

namespace App\Modules\Customer\Application\Services\Customer;

use App\Modules\Customer\Application\Resources\Customer\CustomerCollection;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerAddInputRepository;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerDeleteInputRepository;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerEditInputRepository;
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
        $input = new CustomerAddInputRepository($data->name,  $data->phone_number, $data->email, $data->agent_id, $data->status_id);
        return $repository->add($input);
    }
    public function edit(CustomerEditInputService $data)
    {
        $repository = new CustomerRepository();
        $input = new CustomerEditInputRepository($data->id, $data->name, $data->phone_number, $data->email, $data->agent_id, $data->status_id);
        return $repository->edit($input);
    }

    public function delete(CustomerDeleteInputService $data)
    {
        $repository = new CustomerRepository();
        $input = new CustomerDeleteInputRepository($data->id);
        return $repository->delete($input);
    }
}
