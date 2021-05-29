<?php

namespace App\Modules\Customer\Application\Services\Customer;


class CustomerAddInputService
{
    public $name;
    public $phone_number;
    public $status;
    public $follow_up_by;
    public function __construct($name, $phone_number, $follow_up_by, $status)
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->follow_up_by;
        $this->status = $status;
    }
}
