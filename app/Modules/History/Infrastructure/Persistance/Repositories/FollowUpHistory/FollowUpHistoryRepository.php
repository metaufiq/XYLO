<?php

namespace App\Modules\History\Infrastructure\Persistance\Repositories\FollowUpHistory;


use App\Modules\Customer\Domain\Models\Customer;
use App\Modules\History\Domain\Models\FollowUpHistory;;

class FollowUpHistoryRepository
{
    //
    public function list(FollowUpHistoryListInputRepository $data)
    {
        $query = FollowUpHistory::all();
        if ($data->user->role === 'agent') {
            $query = $query->where('agent_id', '=', $data->user->id);
        }
        return $query->sortBy('updated_at');
    }
    public function add(FollowUpHistoryAddInputRepository $data)
    {
        $followUpHistory = new FollowUpHistory();
        $followUpHistory->agent_id = $data->agent_id;
        $followUpHistory->customer_id = $data->customer_id;
        $followUpHistory->status_id = $data->status_id;
        return $followUpHistory->save();
    }
}
