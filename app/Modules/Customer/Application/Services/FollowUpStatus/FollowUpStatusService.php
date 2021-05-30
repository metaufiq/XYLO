<?php

namespace App\Modules\Customer\Application\Services\FollowUpStatus;

use App\Modules\Customer\Application\Resources\FollowUpStatus\FollowUpStatusCollection;
use App\Modules\Customer\Application\Services\FollowUpStatus\FollowUpStatusListInputService;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\FollowUpStatus\FollowUpStatusListInputRepository;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\FollowUpStatus\FollowUpStatusRepository;

class FollowUpStatusService
{
    public function list(FollowUpStatusListInputService $data)
    {
        $repository = new FollowUpStatusRepository();
        $input = new FollowUpStatusListInputRepository($data->start, $data->limit, $data->keyword);
        return new FollowUpStatusCollection($repository->list($input));
    }
}
