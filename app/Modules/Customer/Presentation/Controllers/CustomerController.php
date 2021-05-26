<?php

namespace App\Modules\Customer\Presentation\Controllers;


use App\Http\Controllers\Controller;
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
}
