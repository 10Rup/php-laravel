<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div>
        <form method="POST" action="{{route('profile')}}">
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