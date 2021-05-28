<?php

namespace App\Modules\Customer\Application\Services\Customer;


class CustomerEditInputService
{
    public $id;
    public $name;
    public $phone_number;
    public $status;
    public function __construct($id, $name, $phone_number, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->status = $status;
    }
}
