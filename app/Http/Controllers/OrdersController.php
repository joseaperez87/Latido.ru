<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{

    public function createForm(Request $request){
        $service = $request->input("service");

        return view("orders/steps");
    }
}
