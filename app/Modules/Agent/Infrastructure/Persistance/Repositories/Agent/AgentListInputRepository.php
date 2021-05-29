<?php

namespace App\Modules\Agent\Infrastructure\Persistance\Repositories\Agent;


class AgentListInputRepository
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
