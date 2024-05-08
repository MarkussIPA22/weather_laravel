<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index (Request $request) {
        $WeatherResponse = [];

if($request->isMethod("post")) {
  
    $cityName = $request->city;
    $response = Http::withHeaders([
        "X-RapidAPI-Host" => "open-weather13.p.rapidapi.com" ,
        "X-RapidAPI-Key" => "c8e4727c7fmsh59f7017d9592aa4p1bb65djsnf448ec9d263a" 
    ])->get("https://open-weather13.p.rapidapi.com/city/{$cityName}/EN");

$WeatherResponse = $response->json();
}
        return view("weather", [
            "data" => $WeatherResponse  
        ]);
    }
}
