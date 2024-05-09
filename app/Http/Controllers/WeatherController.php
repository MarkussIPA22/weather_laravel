<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $weatherData = [];

        if ($request->isMethod("post")) {
            $cityName = $request->city;
            $response = Http::withHeaders([
                "X-RapidAPI-Host" => "open-weather13.p.rapidapi.com",
                "X-RapidAPI-Key" => "01b0b06ef4mshe281d1f02810287p1f2727jsn637a01b25018"
            ])->get("https://open-weather13.p.rapidapi.com/city/{$cityName}/EN");

            $weatherData = $response->json();
        }

        return view("weather", [
            "data" => $weatherData
        ]);
    }
}
