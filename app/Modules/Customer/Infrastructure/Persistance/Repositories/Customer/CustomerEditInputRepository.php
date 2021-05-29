<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;


class CustomerEditInputRepository
{
    public $id;
    public $name;
    public $phone_number;
    public $status;
    public $follow_up_by;
    public function __construct($id, $name, $phone_number, $follow_up_by, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->follow_up_by = $follow_up_by;
        $this->status = $status;
    }
}
