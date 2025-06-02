<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>

    <h1>Registration Page</h1>
    <div>
        <form action="{{route('create-user')}}" method="post">
            @csrf
            <div>
                <label for="name">Name : </label> <input type="text" name='name' id='name' placeholder='Enter your name' required> <br><br>
                <label for="email">Email : </label> <input type="email" name='email' id='email' placeholder='Enter your email' required> <br><br>
                <label for="password">Password : </label> <input type="password" name='password' id='password' placeholder='Enter your password' required> <br><br>
            </div>
            <div>
                <button>Create</button>
            </div>
        </form>
    </div>
    <a href="{{route('home')}}">Home</a>






</body>
</html>
