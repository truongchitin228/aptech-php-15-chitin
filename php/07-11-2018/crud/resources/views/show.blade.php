<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
    <h1 class="text-center"> LARAVEL </h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="text-center">
                <th> ID </th>
                <th> Name </th>
                <th> Email </th>
                <th> Password </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
        <tr>
        <td> {{$user->ID}} </td>
        <td> {{$user->Name}} </td>
        <td> {{$user->email}} </td>
        <td> {{$user->Password}} </td>
        // xem 1 người dùng chúng ta cần có id để muốn biết thông tin của người đó  
        <td class="d-flex flex-row justify-content-center">    
        <form action="{{asset('index/' . $user->ID)}}" method="GET">
        <button class='btn btn-danger '> EDIT </button> 
        </form>
        <form action="{{asset('index/' . $user->ID)}}" method="POST">
        {{csrf_field()}}
        <input type='hidden' value='DELETE' name='_method'>
        <button type='submit' class='btn btn-warning'> DELETE </button>
        </form>          
         </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>