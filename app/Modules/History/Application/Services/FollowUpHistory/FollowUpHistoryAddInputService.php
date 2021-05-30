<?php

namespace App\Modules\History\Application\Services\FollowUpHistory;


class FollowUpHistoryAddInputService
{
    public $customer_id;
    public $agent_id;
    public $status_id;
    public function __construct($customer_id, $agent_id, $status_id)
    {
        $this->customer_id = $customer_id;
        $this->agent_id = $agent_id;
        $this->status_id = $status_id;
    }
}
