<?php

namespace App\Modules\Agent\Presentation\Controllers;



use App\Http\Controllers\Controller;
use App\Modules\Agent\Application\Services\Agent\AgentListInputService;
use App\Modules\Agent\Application\Services\Agent\AgentService;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    //
    public function list(Request $request)
    {

        $service = new AgentService();
        $input = new AgentListInputService($request->input('start'), $request->input('limit'), $request->input('keyword'));
        return $service->list($input);
    }
}
