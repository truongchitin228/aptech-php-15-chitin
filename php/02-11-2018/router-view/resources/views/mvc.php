<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table-User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>  
    <div class="container my-2">
        <div class="row">
            <div class="col-12">
                <span class="badge badge-success text-uppercase text-left">index page</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
foreach ($user as $user) {
    echo '<tr class="text-center">';
    echo '<th scope="row">' . $user->Id . '</th>';
    echo '<td>' . $user->Name . '</td>';
    echo '<td>' . $user->Email . '</td>';
    echo '<td class="d-flex justify-content-around align-items-center">';
    echo '<form action="' . $user->Id . '" method="get"><button class="btn btn-sm btn-primary rounded-0">Show</button>';
    echo '</form><form action="" method="get"><button class="btn btn-sm btn-warning rounded-0">Edit</button>';
    echo '</form><form action="" method="get"><button class="btn btn-sm btn-danger rounded-0">Delete</button></form></td></tr>';
}
?>
</body>

</html>