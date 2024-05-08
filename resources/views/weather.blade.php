
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
        /* Height of the footer */#
     
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
    </nav>

    <div class="container">
        <h1 class="mt-5 mb-4">Weather Application</h1>
        <div class="input-group mb-3">
            <form action="{{ route('weather') }}" method="post" class="form-inline">
                @csrf
               
            </form>
            
            
                <div class="d-flex">
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter city name">

                    </div>
                    <button style="margin-left: 20px;"  class="btn btn-primary">Search</button>
                </div>
            </form>

        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Looks Like</h5>
                        <br>
                        <b>--</b>
                    </div>
                </div>

              

            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Location Details</h5>
                        <br>
                        <p class="card-text">Country: 
                                <b> 
                                @if(isset($data["sys"]['country']))
                                {{$data["sys"]['country'] }}
                                @else
                                --
                                @endif 
                                </b>
                                </p>                
                                        <p class="card-text">Name: 
                                            <b>  
                                            @if(isset($data["name"]))
                                            {{$data["name"]}}
                                            @else
                                            --
                                            @endif </b>
                                        </p>

                        <p class="card-text">Latitude: 
                            <b>  
                            @if(isset($data["coord"]['lat']))
                            {{$data["coord"]['lat']}}
                            @else
                            --
                            @endif  </b>
                        </p> </b></p>


                        <p class="card-text">Longitude:  <b>  
                            @if(isset($data["coord"]['lon']))
                        {{$data["coord"]['lon']}}
                        @else
                        --
                        @endif  </b>
                    </p> </b></p></p>
                        <p class="card-text">Sunrise: 
                            @if(isset($data["sys"]['sunrise']))
                            {{$data["sys"]['sunrise'] }}
                            @else
                            --
                            @endif 
                        </p>
                        <p class="card-text">Sunset: 
                            @if(isset($data["sys"]['sunset']))
                            {{$data["sys"]['sunset'] }}
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
                        <h5 class="card-title">Temperature &deg; C </h5>
                        <br>
                        <p class="card-text">Temp: 

                            @if(isset($data["main"]['temp']))
                            {{$data["main"]['temp'] }}
                            @else
                            --
                            @endif 
                        </p>
                        <p class="card-text">Min Temp: 
                            @if(isset($data["main"]['temp_min']))
                            {{$data["main"]['temp_min'] }}
                            @else
                            --
                            @endif 
                        </p>
                        <p class="card-text">Max Temp: 
                            @if(isset($data["main"]['temp_max']))
                            {{$data["main"]['temp_max'] }}
                            @else
                            --
                            @endif 
                        </p>
                        <p class="card-text">Feels Like: 
                            @if(isset($data["main"]['feels_like']))
                            {{$data["main"]['feels_like'] }}
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
                        <br>
                        <p class="card-text">Humidity: 
                            @if(isset($data["main"]['humidity']))
                            {{$data["main"]['humidity'] }}
                            @else
                            --
                            @endif 
                        </p>
                        <p class="card-text">Pressure: 
                            @if(isset($data["main"]['humidity']))
                            {{$data["main"]['pressure'] }}
                            @else
                            --
                            @endif 
                        </p>
                        <p class="card-text">Sea Level: 
                            @if(isset($data["main"]['sea_level']))
                            {{$data["main"]['sea_level'] }}
                            @else
                            --
                            @endif 
                        </p>
                        <p class="card-text">Ground Level: 
                            @if(isset($data["main"]['grnd_level']))
                            {{$data["main"]['grnd_level'] }}
                            @else
                            --
                            @endif 
                        </p>
                        <p class="card-text">Visibility: 
                            @if(isset($data["ivisibility"]))
                                {{$data["visbility"]}} meters
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
                        <h5 class="card-title">Wind m/h</h5>
                        <br>
                        <p class="card-text">Speed: 
                            @if(isset($data["wind"]['speed']))
                            {{$data["wind"]['speed'] }}
                            @else
                            --
                            @endif 
                            
                        </p>
                        <p class="card-text">Degree: 
                            @if(isset($data["wind"]['deg']))
                            {{$data["wind"]['deg'] }}
                            @else
                            --
                            @endif 
                        </p>
                        <p class="card-text">Gust: 
                            @if(isset($data["wind"]['gust']))
                            {{$data["wind"]['gust'] }}
                            @else
                            --
                            @endif 
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br>

        
        </div>
    </footer>
</body>

</html>