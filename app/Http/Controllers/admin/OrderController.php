<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){
        $order = Order::latest()->get();
        return view('admin.order.index', compact('order'));
    }
}
