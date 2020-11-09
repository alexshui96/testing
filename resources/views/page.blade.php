<!DOCTYPE html>
<html lang="en">
<head>


 <title>page</title>
</head>
<body>





    @foreach ($users as $user)
       <p> {{ $user['username'] }}========{{$user['age']}}</p>
    @endforeach


{{ $users->links() }}
    
</body>
</html>