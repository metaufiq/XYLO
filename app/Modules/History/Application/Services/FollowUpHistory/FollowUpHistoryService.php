<?php

namespace App\Modules\History\Application\Services\FollowUpHistory;


use App\Modules\Customer\Application\Resources\Customer\CustomerCollection;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerAddInputRepository;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerDeleteInputRepository;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerEditInputRepository;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerListInputRepository;
use App\Modules\Customer\Infrastructure\Persistance\Repositories\Customer\CustomerRepository;
use App\Modules\History\Infrastructure\Persistance\Repositories\FollowUpHistory\FollowUpHistoryAddInputRepository;
use App\Modules\History\Infrastructure\Persistance\Repositories\FollowUpHistory\FollowUpHistoryListInputRepository;
use App\Modules\History\Infrastructure\Persistance\Repositories\FollowUpHistory\FollowUpHistoryRepository;

class FollowUpHistoryService
{
    public function list(FollowUpHistoryListInputService $data)
    {
        $repository = new FollowUpHistoryRepository();
        $input = new FollowUpHistoryListInputRepository($data->user);
        return new CustomerCollection($repository->list($input));
    }

    public function add(FollowUpHistoryAddInputService $data)
    {
        $repository = new FollowUpHistoryRepository();
        $input = new FollowUpHistoryAddInputRepository($data->customer_id,  $data->agent_id, $data->status_id);
        return $repository->add($input);
    }
}
