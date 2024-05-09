<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        margin-bottom: 60px;
        /* Height of the footer */
    }

    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 60px;
        /* Height of the footer */
        background-color: #f5f5f5;
    }

    p.card-text {
        margin-top: -10px;
    }
    
    .card {
        padding: 20px; /* Adjust this value to make the cards bigger */
        margin-bottom: 20px; /* Add margin-bottom to create space between the cards */
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Weather App</a>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5 mb-4">Weather Application</h1>

        <div class="input-group mb-3">
            <form action="{{ route('weather.form') }}" method="post" class="form-inline">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Enter city name">
                </div>
                <button style="margin-left: 20px;"  class="btn btn-primary">Search</button>
            </form>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Location Details</h5>
                        <p class="card-text">Country: <b>{{ $data["sys"]["country"] ?? "--" }}</b></p>
                        <p class="card-text">Name: <b><a href="https://www.google.com/search?q={{ $data["name"] ?? "" }}" target="_blank">{{ $data["name"] ?? "--" }}</a></b></p>
                        <p class="card-text">Latitude: <b>{{ $data["coord"]["lat"] ?? "--" }}</b></p>
                        <p class="card-text">Longitude: <b>{{ $data["coord"]["lon"] ?? "--" }}</b></p>
                        <p class="card-text">Sunrise: {{ $data["sys"]["sunrise"] ?? "--" }}</p>
                        <p class="card-text">Sunset: {{ $data["sys"]["sunset"] ?? "--" }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Temperature</h5>
                        <p class="card-text">Temp:
                            @if(isset($data["main"]['temp']))
                                {{ $data["main"]['temp'] }} °F =
                                {{ round(($data["main"]['temp'] - 32) * (5/9)) }} °C
                            @else
                                --
                            @endif
                        </p>
                        <p class="card-text">Min Temp:
                            @if(isset($data["main"]['temp_min']))
                                {{ $data["main"]['temp_min'] }} °F =
                                {{ round(($data["main"]['temp_min'] - 32) * (5/9)) }} °C
                            @else
                                --
                            @endif
                        </p>
                        <p class="card-text">Max Temp:
                            @if(isset($data["main"]['temp_max']))
                                {{ $data["main"]['temp_max'] }} °F =
                                {{ round(($data["main"]['temp_max'] - 32) * (5/9)) }} °C
                            @else
                                --
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Precipitation &percnt;</h5>
                        <p class="card-text">Humidity: {{ $data["main"]["humidity"] ?? "--" }}</p>
                        <p class="card-text">Pressure: {{ $data["main"]["pressure"] ?? "--" }}</p>
                        <p class="card-text">Sea Level: {{ $data["main"]["sea_level"] ?? "--" }}</p>
                        <p class="card-text">Ground Level: {{ $data["main"]["grnd_level"] ?? "--" }}</p>
                        <p class="card-text">Visibility: {{ $data["visibility"] ?? "--" }} meters</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-2">
                        <h5 class="card-title">Wind m/h</h5>
                        <p class="card-text m-0">Speed: {{ $data["wind"]["speed"] ?? "--" }}</p>
                        <p class="card-text m-0">Degree: {{ $data["wind"]["deg"] ?? "--" }}</p>
                        <p class="card-text m-0">Gust: {{ $data["wind"]["gust"] ?? "--" }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
