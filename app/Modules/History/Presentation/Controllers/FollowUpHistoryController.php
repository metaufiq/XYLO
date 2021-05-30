<?php

namespace App\Modules\History\Presentation\Controllers;




use App\Http\Controllers\Controller;
use App\Modules\History\Application\Services\FollowUpHistory\FollowUpHistoryAddInputService;
use App\Modules\History\Application\Services\FollowUpHistory\FollowUpHistoryListInputService;
use App\Modules\History\Application\Services\FollowUpHistory\FollowUpHistoryService;
use Illuminate\Http\Request;

class FollowUpHistoryController extends Controller
{
    //
    public function list(Request $request)
    {

        $service = new FollowUpHistoryService();
        $userMapper = (object) [
            'id' => $request->input('user_id'),
            'role' => $request->input('user_role'),
        ];
        $input = new FollowUpHistoryListInputService($userMapper);
        return $service->list($input);
    }

    public function add(Request $request)
    {
        $service = new FollowUpHistoryService();
        $input = new FollowUpHistoryAddInputService($request->input('customer_id'), $request->input('agent_id'), $request->input('status_id'));
        return $service->add($input);
    }
}
