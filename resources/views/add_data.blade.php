<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
      <a href="{{url('/')}}" class="btn btn-primary mt-5">show data</a>
      
    </div>
    <div class="container mt-5">
      <form action="{{url('storeData')}}" method="post">
        @csrf

       
        <div class="mb-3">
          <label >Your name :</label>
          <input name="name" type="text" >
          @error('name')
          <sapn class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label >Email address</label>
          <input name="email" type="email">
          @error('email')
          <sapn class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label>Password</label>
          <input type="password" name="password">
          @error('password')
          <sapn class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
          @error('check')
          <sapn class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <input type="submit" value="Add">
      </form>
    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>