<?php

namespace App\Modules\Customer\Presentation\Controllers;




use App\Http\Controllers\Controller;
use App\Modules\Agent\Application\Services\Agent\AgentListInputService;
use App\Modules\Agent\Application\Services\Agent\AgentService;
use App\Modules\Customer\Application\Services\FollowUpStatus\FollowUpStatusListInputService;
use App\Modules\Customer\Application\Services\FollowUpStatus\FollowUpStatusService;
use Illuminate\Http\Request;

class FollowUpStatusController extends Controller
{
    //
    public function list(Request $request)
    {

        $service = new FollowUpStatusService();
        $input = new FollowUpStatusListInputService($request->input('start'), $request->input('limit'), $request->input('keyword'));
        return $service->list($input);
    }
}
