<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function orders()
    {
        $viewData = [];
        $viewData["title"] = "My Orders - Online Store";
        $viewData["subtitle"] = "My Orders";
        // Uso de EagerLoading
        $viewData["orders"] = Order::with(
            ['items.product']
        )->where('user_id', Auth::user()->getId())->get();
        // Uso de LazyLoading
        /* $viewData["orders"] = Order::where('user_id', Auth::user()->getId())->get(); */
        return view('myaccount.orders')->with("viewData", $viewData);
    }
}