<?php

namespace App\Modules\Customer\Application\Services\Customer;


class CustomerEditInputService
{
    public $id;
    public $name;
    public $phone_number;
    public $email;
    public $status;
    public $follow_up_by;
    public function __construct($id, $name, $phone_number, $email, $follow_up_by, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->email = $email;
        $this->follow_up_by = $follow_up_by;
        $this->status = $status;
    }
}
