<?php

namespace App\Modules\History\Application\Services\FollowUpHistory;


class FollowUpHistoryListInputService
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}
