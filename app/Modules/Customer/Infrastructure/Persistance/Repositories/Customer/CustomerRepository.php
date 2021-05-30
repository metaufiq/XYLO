<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;

use App\Modules\Customer\Domain\Models\Customer;;

class CustomerRepository
{
    //
    public function list(CustomerListInputRepository $data)
    {
        $query = Customer::all();
        if ($data->user->role === 'agent') {
            $query = $query->where('agent_id', '=', $data->user->id);
        }
        return $query->sortBy('updated_at');
    }
    public function add(CustomerAddInputRepository $data)
    {
        $customer = new Customer();
        $customer->name = $data->name;
        $customer->phone_number = $data->phone_number;
        $customer->email = $data->email;
        $customer->agent_id = $data->agent_id;
        $customer->status_id = $data->status_id;
        $customer->save();
        return $customer;
    }
    public function edit(CustomerEditInputRepository $data)
    {
        $customer = Customer::find($data->id);
        $customer->name = $data->name;
        $customer->phone_number = $data->phone_number;
        $customer->email = $data->email;
        $customer->status_id = $data->status_id;
        $customer->agent_id = $data->agent_id;

        return $customer->save();
    }
    public function delete(CustomerDeleteInputRepository $data)
    {
        $customer = Customer::find($data->id);

        return $customer->delete();
    }
}
