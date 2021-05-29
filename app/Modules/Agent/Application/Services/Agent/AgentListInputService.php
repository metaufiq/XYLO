<?php

namespace App\Modules\Agent\Application\Services\Agent;




class AgentListInputService
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
