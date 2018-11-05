<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
<table class="table table-hover table-bordered">
  <thead class="">
    <tr class="text-center">
      <th scope="col" class="">#</th>
      <th scope="col" class="">Name</th>
      <th scope="col" class="">Email</th>
      <th scope="col" class="">Password</th>
      <th scope="col" class="">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <th scope="row">{{ $users[0]->id }}</th>
      <td>{{ $users[0]->name }} </td>
      <td>{{ $users[0]->email }}</td>
      <td>{{ $users[0]->password }}</td>
      <td class="d-flex border-0 align-items-center justify-content-around">
      <form action="{{ $users[0]->id.'/show' }}" method="get"><button class="btn btn-sm btn-success mx-2 rounded-0">show</button></form>
        <form action="{{ $users[0]->id.'/edit' }}" method="get"><button class="btn btn-sm btn-warning mx-2 rounded-0">Edit</button></form>
        <form action="{{ $users[0]->id.'/delete' }}" method="get"><button class="btn btn-sm btn-danger mx-2 rounded-0">Delete</button></form>
      </td>
    </tr>
  </tbody>
</table>
</body>