<?php

namespace App\Modules\History\Infrastructure\Persistance\Repositories\FollowUpHistory;


class FollowUpHistoryListInputRepository
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}
