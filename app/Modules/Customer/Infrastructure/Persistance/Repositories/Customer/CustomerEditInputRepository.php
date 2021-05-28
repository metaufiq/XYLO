<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;


class CustomerEditInputRepository
{
    public $id;
    public $name;
    public $phone_number;
    public $status;
    public function __construct($id, $name, $phone_number, $status)
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->status = $status;
        $this->id = $id;
    }
}
