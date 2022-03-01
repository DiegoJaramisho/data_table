<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function consumir_api()
    {
        $datos = Http::get('http://jsonplaceholder.typicode.com/posts');
        $datosArray = $datos->json();
        return view('vista_api',compact('datosArray'));
    }
}
