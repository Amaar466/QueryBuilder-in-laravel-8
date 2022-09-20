<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-dark table-striped table-responsive">
   <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Edit</th>
    <th>Delete</th>
   </thead>
   <tbody>
    @foreach($data as $final)
    <tr>
        <td>{{$final->id}}</td>
        <td>{{$final->name}}</td>
        <td>{{$final->email}}</td>
        <td>{{$final->phone}}</td>
        <td><a class="btn btn-primary" href="{{route('student.edit' , $final->id)}}">Edit</a></td>
        <td><a class="btn btn-danger" href="{{route('student.delete' , $final->id)}}">Delete</a></td>
    </tr>
    @endforeach
   </tbody>
    </table>
   <h2>{{$data->links()}}</h2>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>