<?php

namespace App\Modules\Customer\Presentation\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Customer\Application\Services\Customer\CustomerAddInputService;
use App\Modules\Customer\Application\Services\Customer\CustomerDeleteInputService;
use App\Modules\Customer\Application\Services\Customer\CustomerEditInputService;
use App\Modules\Customer\Application\Services\Customer\CustomerListInputService;
use App\Modules\Customer\Application\Services\Customer\CustomerService;
use App\Modules\History\Presentation\Controllers\FollowUpHistoryController;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function list(Request $request)
    {

        $service = new CustomerService();
        $userMapper = (object) [
            'id' => $request->input('user_id'),
            'role' => $request->input('user_role'),
        ];
        $input = new CustomerListInputService($userMapper);
        return $service->list($input);
    }

    public function add(Request $request)
    {
        $service = new CustomerService();
        dd($request->all());
        $input = new CustomerAddInputService(
            $request->input('name'),
            $request->input('phone_number'),
            'taufiq@rgm.gmail.com',
            $request->input('agent_id'),
            $request->input('status_id')
        );
        $newCustomer = $service->add($input);
        $followUpHistoryController = new FollowUpHistoryController();
        $followUpHistoryController->add($request->replace(
            [
                'agent_id' => $request->input('agent_id'),
                'status_id' => $request->input('status_id'),
                'customer_id' => $newCustomer->id
            ]
        ));

        return;
    }

    public function edit(Request $request)
    {
        $service = new CustomerService();
        $input = new CustomerEditInputService($request->input('id'), $request->input('name'), $request->input('phone_number'), 'taufiq@rgm.gmail.com', $request->input('agent_id'),  $request->input('status_id'));
        return $service->edit($input);
    }

    public function delete(Request $request)
    {
        $service = new CustomerService();
        $input = new CustomerDeleteInputService($request->input('id'));
        return $service->delete($input);
    }
}
