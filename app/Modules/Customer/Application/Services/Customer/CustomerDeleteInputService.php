<?php

namespace App\Modules\Customer\Application\Services\Customer;


class CustomerDeleteInputService
{
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
}
