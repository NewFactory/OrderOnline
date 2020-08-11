<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

class OrderController extends Controller {

    public function findorder(OrderRequest $req) {
      $order = new Order;
      return view ('dashboard', ['data' => $order->where('number_order', $req->input('order'))->get()]);
    }
}
