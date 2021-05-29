<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;


class CustomerAddInputRepository
{
    public $name;
    public $phone_number;
    public $email;
    public $status;
    public $agent_id;
    public function __construct($name, $phone_number, $email, $agent_id, $status)
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->email = $email;
        $this->agent_id = $agent_id;
        $this->status = $status;
    }
}
