<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>{{$user->name}}</h1>
    <!-- <a href="{{ route('logout') }}">Logout</a> -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        @method('POST')
        <button>Logout</button>
    </form>
    <pre>{{ $request }}</pre>
    
</body>
</html>