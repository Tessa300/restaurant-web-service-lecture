<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store (int $reservationId){
        $order = new Order();
        $order->reservationId = $reservationId;
        $order->productId = request('id');
        $order->amount = request('amount');

        $order->save(); // Save to DB

        //dd(DB::table('orders')->select()->get());

        return redirect('home/'.$reservationId)->with('msg', 'Vielen Dank für die Bestellung');
    }
}
