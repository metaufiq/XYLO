<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;


class CustomerDeleteInputRepository
{
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
}
