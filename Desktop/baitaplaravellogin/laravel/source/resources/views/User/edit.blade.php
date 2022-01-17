<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
      .col-6{
          margin-left: 350px;
      }
  </style>
  <body> 
    @include('adminpage')
            <div class="col-6">
               <form action="{{route('userUpdate',$user->id)}}" method="post">
                   @csrf
                <label for="">Name</label>
                <input type="text" name="name" placeholder="name?" value="{{$user->name}}"><br>
                   <label for="">Email</label>
                   <input type="text" name="email" placeholder="email?" value="{{$user->email}}"><br>
                   <label for="">Password</label>                   
                   <input type="password" name="passwrod" placeholder="password?" value="{{$user->password}}"><br>
                   <label for="">ROLE</label>
                   <input type="number" name="role" placeholder="O la user,1 la admin" value="{{$user->role}}"><br>
                   <input type="submit" class="btn btn-info" value="Update">
               </form>
            </div>
      
    </div>
  
  </body>
</html>