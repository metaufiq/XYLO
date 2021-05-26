<?php

namespace App\Modules\Customer\Application\Services\Customer;


class CustomerListInputService
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
