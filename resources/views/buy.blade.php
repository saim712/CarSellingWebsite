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

        {{$value->car_name}}
        {{$value->car_image}}
        <img src="{{ asset($value->car_image) }}" alt="Car Image">


    @endforeach
</body>
</html>