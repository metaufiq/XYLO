<?php

namespace App\Modules\Customer\Application\Services\FollowUpStatus;


use App\Modules\Customer\Application\Resources\CustomerCollection;
use App\Modules\Customer\Application\Services\FollowUpStatus\FollowUpStatusListInputService;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\FollowUpStatus\followUpStatusListInputRepository;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\FollowUpStatus\FollowUpStatusRepository;

class FollowUpStatusService
{
    public function list(FollowUpStatusListInputService $data)
    {
        $repository = new FollowUpStatusRepository();
        $input = new followUpStatusListInputRepository($data->start, $data->limit, $data->keyword);
        return new CustomerCollection($repository->list($input));
    }
}
