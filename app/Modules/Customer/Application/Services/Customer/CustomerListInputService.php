<?php

namespace App\Modules\Customer\Application\Services\Customer;


class CustomerListInputService
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}
