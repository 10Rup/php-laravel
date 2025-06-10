<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page V2</title>
</head>
<body>
    <div>
        <form action="{{route('profile')}}" method="POST">
            @csrf
            <label for="username">UserName : </label> 
            <input type="text" id="username" name='username' value="{{ old('username') }}">

            @error('username')
            <div>{{ $message }}</div>
            @enderror
        
            <button type='Submit'>Login</button>
        </form>
    </div>
</body>
</html>