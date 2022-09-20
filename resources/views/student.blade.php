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
    
@if (session('status'))
<div class="alert alert-success" style="font-size:30px;">
    {{ session('status') }}
</div>
@endif
<div
  class="bg-image"
  style="
    background-image: url('image/images.jpg');
    height: 100vh;
  "
>

    <form action="{{route('student.store')}}" method="post" class="mt-5">
        @csrf
   <label for="name"></label>
   <input class="form-control" type="text" name="name" placeholder="Enter Your name">
   <label for="email"></label>
   <input class="form-control" type="email" name="email" placeholder="Enter Your email">
   <label for="phone"></label>
   <input class="form-control" type="text" name="phone" placeholder="Enter Your phone number">
   <input  type="submit" class="btn btn-success mt-4">
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>