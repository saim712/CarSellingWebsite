<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy</title>

    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
</head>
<body>
    <h1>this is page which listed cars to buy</h1>

    @foreach($data as $value)

       

    @if($value->car_id == "16")
    <img src="{{ asset($value->car_image) }}" alt="Car Image">
    <h2>{{$value->car_name}}</h2>
    <h2>{{$value->car_model}}</h2>
    <h2>{{$value->car_price}}</h2>
    <h2>{{$value->car_city}}</h2>
    <h2>{{$value->contact}}</h2>
    <h2>{{$value->updated_at}}</h2>
    <h2></h2>
    @endif

    @if($value->car_id == "17")
    <img src="{{ asset($value->car_image) }}" alt="Car Image">
    <h2>{{$value->car_name}}</h2>
    <h2>{{$value->car_model}}</h2>
    <h2>{{$value->car_price}}</h2>
    <h2>{{$value->car_city}}</h2>
    <h2>{{$value->contact}}</h2>
    <h2>{{$value->updated_at}}</h2>
    <h2></h2>
    @endif
    @if($value->car_id == "18")
    <img src="{{ asset($value->car_image) }}" alt="Car Image">
    <h2>{{$value->car_name}}</h2>
    <h2>{{$value->car_model}}</h2>
    <h2>{{$value->car_price}}</h2>
    <h2>{{$value->car_city}}</h2>
    <h2>{{$value->contact}}</h2>
    <h2>{{$value->updated_at}}</h2>
    <h2></h2>
    @endif
    @if($value->car_id == "19")
    <img src="{{ asset($value->car_image) }}" alt="Car Image">
    <h2>{{$value->car_name}}</h2>
    <h2>{{$value->car_model}}</h2>
    <h2>{{$value->car_price}}</h2>
    <h2>{{$value->car_city}}</h2>
    <h2>{{$value->contact}}</h2>
    <h2>{{$value->updated_at}}</h2>
    <h2></h2>
    @endif
    @if($value->car_id == "20")
    <img src="{{ asset($value->car_image) }}" alt="Car Image">
    <h2>{{$value->car_name}}</h2>
    <h2>{{$value->car_model}}</h2>
    <h2>{{$value->car_price}}</h2>
    <h2>{{$value->car_city}}</h2>
    <h2>{{$value->contact}}</h2>
    <h2>{{$value->updated_at}}</h2>
    <h2></h2>
    @endif
    @if($value->car_id == "21")
    <img src="{{ asset($value->car_image) }}" alt="Car Image">
    <h2>{{$value->car_name}}</h2>
    <h2>{{$value->car_model}}</h2>
    <h2>{{$value->car_price}}</h2>
    <h2>{{$value->car_city}}</h2>
    <h2>{{$value->contact}}</h2>
    <h2>{{$value->updated_at}}</h2>
    <h2></h2>
    @endif
    @if($value->car_id == "22")
    <img src="{{ asset($value->car_image) }}" alt="Car Image">
    <h2>{{$value->car_name}}</h2>
    <h2>{{$value->car_model}}</h2>
    <h2>{{$value->car_price}}</h2>
    <h2>{{$value->car_city}}</h2>
    <h2>{{$value->contact}}</h2>
    <h2>{{$value->updated_at}}</h2>
    <h2></h2>
    @endif
    @if($value->car_id == "23")
    <img src="{{ asset($value->car_image) }}" alt="Car Image">
    <h2>{{$value->car_name}}</h2>
    <h2>{{$value->car_model}}</h2>
    <h2>{{$value->car_price}}</h2>
    <h2>{{$value->car_city}}</h2>
    <h2>{{$value->contact}}</h2>
    <h2>{{$value->updated_at}}</h2>
    <h2></h2>
    @endif
    @if($value->car_id == "24")
    <img src="{{ asset($value->car_image) }}" alt="Car Image">
    <h2>{{$value->car_name}}</h2>
    <h2>{{$value->car_model}}</h2>
    <h2>{{$value->car_price}}</h2>
    <h2>{{$value->car_city}}</h2>
    <h2>{{$value->contact}}</h2>
    <h2>{{$value->updated_at}}</h2>
    <h2></h2>
    @endif
    @if($value->car_id == "25")
    <img src="{{ asset($value->car_image) }}" alt="Car Image">
    <h2>{{$value->car_name}}</h2>
    <h2>{{$value->car_model}}</h2>
    <h2>{{$value->car_price}}</h2>
    <h2>{{$value->car_city}}</h2>
    <h2>{{$value->contact}}</h2>
    <h2>{{$value->updated_at}}</h2>
    <h2></h2>
    @endif

        
        

        

    @endforeach
</body>
</html>