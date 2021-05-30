<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;


class CustomerListInputRepository
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}
