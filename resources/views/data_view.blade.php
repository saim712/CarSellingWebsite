<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data_view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Dob</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customer as $val)
            <tr>
                <td>{{$val->cust_id}}</td>
                <td>{{$val->cust_name}}</td>
                <td>{{$val->cust_email}}</td>
                <td>{{$val->cust_address}}</td>
                <td>{{$val->cust_dob}}</td>
                <td>{{$val->password}}</td>
                
                
                
            </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>