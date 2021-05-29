<?php

namespace App\Modules\Agent\Application\Services\Agent;



use App\Modules\Agent\Application\Resources\AgentCollection;
use App\Modules\Agent\Infrastructure\Persistance\Repositories\Agent\AgentListInputRepository;
use App\Modules\Agent\Infrastructure\Persistance\Repositories\Agent\AgentRepository;

class AgentService
{
    public function list(AgentListInputService $data)
    {
        $repository = new AgentRepository();
        $input = new AgentListInputRepository($data->start, $data->limit, $data->keyword);
        return new AgentCollection($repository->list($input));
    }
}
