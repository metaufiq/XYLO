<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;


class CustomerEditInputRepository
{
    public $id;
    public $name;
    public $phone_number;
    public $email;
    public $status_id;
    public $agent_id;
    public function __construct($id, $name, $phone_number, $email, $agent_id, $status_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->email = $email;
        $this->agent_id = $agent_id;
        $this->status_id = $status_id;
    }
}
