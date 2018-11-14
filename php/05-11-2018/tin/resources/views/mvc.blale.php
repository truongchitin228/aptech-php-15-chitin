<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
    <h1 class="text-center"> Users </h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Email </th>
                <th> Password </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
        <td> {{$user->id}} </td>
        <td> {{$user->name}} </td>
        <td> {{$user->email}} </td>
        <td> {{$user->password}} </td>
        <td>
            <button class='btn btn-danger'> Show </button>                 <button class='btn btn-success'> Edit </button> 
            <button class='btn btn-warning'> Delete </button>  
        </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>