<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12"> 
            // edit này chúng ta phải bỏ ID vào để nó hiểu được chúng ta bấm vào người nào đó để thay đổi ... và lưu lại thông tin của người dùng
                <form action="{{route('user.update', $user->ID)}}" method="POST">
                {{ csrf_field()}}

                <input type="hidden" name="_method" value="PUT">
                    Name: <input type="text" name="name" value="{{$user->name}}">
                    Email: <input type="email" name="email" value="{{$user->email}}">
                    Password: <input type="Password" name="Password" value="{{$user->Password}}">
                    <button type="submit"> SAVE
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>