<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;

class OrderController extends Controller
{
    public function store (int $reservationId){
        $order = new Order();
        $order->reservationId = $reservationId;
        $order->productId = request('id');
        $order->amount = request('amount');

        $order->save(); // Save to DB

        //dd(DB::table('orders')->select()->get());

        return redirect('orders/'.$reservationId)->with('msg', 'Vielen Dank für die Bestellung');
    }

    public function show(int $reservationId){
        return view('orders', [
            'reservationId'=>$reservationId, 
            'orders' => $this->getOrdersByReservationId($reservationId), 
            'productImageUrl' => 'http://127.0.0.1:8000/images',
        ]);
    }

    public static function getOrdersByReservationId(int $reservationId){
        $orders = DB::table('orders')->select('productId', DB::raw('sum(amount) as amount'))
                    ->where('reservationId', $reservationId)->groupBy('productId')->get();
        foreach($orders as $order){
            $order->product = HomeController::getProduct($order->productId)[0];
        }
        return $orders;
    }


}
