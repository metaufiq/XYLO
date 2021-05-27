<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;


class CustomerAddInputRepository
{
    public $name;
    public $phone_number;
    public $status;
    public function __construct($name, $phone_number, $status)
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->status = $status;
    }
}
