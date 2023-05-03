<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function show (string $name = "Tessa") :View {
        return view('home', ['firstname'=>$name]);
    }

    public function getAllProducts(){
        $response = Http::get('http://127.0.0.1:8000/api/products');
        dd($response->json());
    }
}
