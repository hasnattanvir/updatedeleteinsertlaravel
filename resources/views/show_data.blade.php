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
    <a href="{{url('/adddata')}}" class="btn btn-primary mt-5">Add Data</a>
     @if(Session::has('msg'))
          <p>{{Session::get('msg')}}</p>
      @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          @foreach($showData as $key=>$data)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>
              <a href="{{url('/edit-data/'.$data->id)}}" class="btn btn-success">Edit</a>
              <a href="{{url('/delete-data/'.$data->id)}}" onclick =" return confirm('Are You Sure To Delete')"  class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>

      {{ $showData->links() }}
  </div>







      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>