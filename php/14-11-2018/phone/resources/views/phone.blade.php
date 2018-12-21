<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css   ">
</head>

<body>
    <div class="container">
        <h1 class="text-center"> phone </h1>
        <table class="table table-hover table-bordered">
            <thead class="text-center">
                <tr class="">
                    <th> # </th>
                    <th> name </th>
                    <th> number </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody >
                @foreach($users as $user)
                <tr class="">
                    <td> {{$user->id}} </td>
                    <td> {{$user->name}} </td>
                    <td> {{$user->$phones->number}} </td>
                    <td class="d-flex flex-row justify-content-center">
                    <form action="{{route('user.show', $user->id)}}" method="GET">
                    <button class='btn btn-info ml-2'> SHOW </button>
                    </form>                        
                    <form action="{{route('user.edit', $user->id)}}" method="GET">
                    <button class='btn btn-success ml-2'> EDIT </button> 
                    </form>
                    <form action="{{route('user.destroy', $user->id)}}" method="POST">
                    {{csrf_field()}}
                    <input type='hidden' value='DELETE' name='_method'>
                    <button type='submit' class='btn btn-warning ml-2'> DELETE </button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>