<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <form action="{{route('uploaddt')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="car_name" class="form-label">Car Name</label>
            <input type="text" class="form-control" id="car_name" name="car_name" required>
            
        </div>
        <div class="mb-3">
            <label for="car_model" class="form-label">car Model</label>
            <input type="text" class="form-control" id="car_model" name="car_model" required>
        </div>
        <div class="mb-3">
            <label for="car_price" class="form-label">Car Price</label>
            <input type="text" class="form-control" id="car_price" name="car_price" required>
            
        </div>
        <div class="mb-3">
            <label for="car_city" class="form-label">Car City</label>
            <input type="text" class="form-control" id="car_city" name="car_city" required>

        </div>
        <div class="mb-3">
            <label for="contact_no" class="form-label">Contact no</label>
            <input type="text" class="form-control" id="contact_no" name="contact_no" required>
        
        </div>
        <div class="mb-3">
            <label for="car_image" class="form-label">Car Image</label>
            <input type="file" class="form-control" id="car_image" name="car_image" required>

        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>