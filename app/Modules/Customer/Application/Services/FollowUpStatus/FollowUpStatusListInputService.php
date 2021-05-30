<?php

namespace App\Modules\Customer\Application\Services\FollowUpStatus;



class FollowUpStatusListInputService
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
