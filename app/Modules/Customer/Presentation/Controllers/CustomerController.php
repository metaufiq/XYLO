<?php

namespace App\Modules\Customer\Presentation\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Customer\Application\Services\Customer\CustomerAddInputService;
use App\Modules\Customer\Application\Services\Customer\CustomerDeleteInputService;
use App\Modules\Customer\Application\Services\Customer\CustomerEditInputService;
use App\Modules\Customer\Application\Services\Customer\CustomerListInputService;
use App\Modules\Customer\Application\Services\Customer\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function list(Request $request)
    {

        $service = new CustomerService();
        $input = new CustomerListInputService($request->input('start'), $request->input('limit'), $request->input('keyword'));
        return $service->list($input);
    }

    public function add(Request $request)
    {
        $service = new CustomerService();
        $input = new CustomerAddInputService($request->input('name'), $request->input('phone_number'), 'taufiq@rgm.gmail.com', $request->input('agent_id'), '0');
        return $service->add($input);
    }

    public function edit(Request $request)
    {
        $service = new CustomerService();
        $input = new CustomerEditInputService($request->input('id'), $request->input('name'), $request->input('phone_number'), 'taufiq@rgm.gmail.com', $request->input('agent_id'),  '0');
        return $service->edit($input);
    }

    public function delete(Request $request)
    {
        $service = new CustomerService();
        $input = new CustomerDeleteInputService($request->input('id'));
        return $service->delete($input);
    }
}
