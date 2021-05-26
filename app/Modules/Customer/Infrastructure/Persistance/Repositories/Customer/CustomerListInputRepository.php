<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer;


class CustomerListInputRepository
{
    public $start;
    public $limit;
    public $keyword;

    public function __construct($start, $limit, $keyword)
    {
        $this->start = $start;
        $this->limit = $limit;
        $this->keyword = $keyword;
    }
}
