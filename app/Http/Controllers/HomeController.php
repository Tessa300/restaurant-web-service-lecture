<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function show (int $reservationId = -1) :View {
        return view('home', [
            'reservationId'=>$reservationId, 
            'products' => $this->getAllProducts(), 
            'productImageUrl' => 'http://127.0.0.1:8000/images',
        ]);
    }

    public function getAllProducts(){
        $response = Http::get('http://127.0.0.1:8000/api/products');
        return $response->json();
    }
}
