<?php

namespace App\Modules\Customer\Infrastructure\Persistance\Repositories\FollowUpStatus;

use App\Modules\Customer\Domain\Models\FollowUpStatus;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\FollowUpStatus\FollowUpStatusListInputRepository;

class FollowUpStatusRepository
{
    public function list(FollowUpStatusListInputRepository $data)
    {
        return FollowUpStatus::all()->where('id', '>=', $data->start)->sortBy('id');
    }
}
