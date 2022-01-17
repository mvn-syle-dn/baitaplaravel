<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .col-6 {
        margin-left: 350px;
    }
</style>
<body>
    @include('adminpage')
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               
                    @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{$item->role}}</td> 
                        <td ><a href="{{ route('userEdit', $item->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('userDelete', $item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
