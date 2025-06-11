<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <a href="{{route('home')}}">Home</a>
    <div>
        @error('auth')
            <div>{{ $message }}</div>
        @enderror

        @error('login')
            <div>{{ $message }}</div>
        @enderror

        <form action="{{route('login')}}" method="POST">
            @csrf
            <label for="username">UserName : </label> 
            <input type="text" id="username" name='username' value="{{ old('username') }}">
            <button type='Submit'>Login</button>
        </form>
    </div>
</body>
</html>