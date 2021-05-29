<?php

namespace App\Modules\Agent\Infrastructure\Persistance\Repositories\Agent;


use App\Modules\Auth\Domain\Models\User;

class AgentRepository
{
    //
    public function list(AgentListInputRepository $data)
    {
        return User::all()
            ->where('id', '>=', $data->start)
            ->where('role', '=', 'agent')
            ->sortBy('id');
    }
}
