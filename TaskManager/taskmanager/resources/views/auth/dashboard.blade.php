<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>{{ auth()->user()->role }} Dashboard</h1>
    <h2>User : {{ auth()->user()->name }}</h2>
    
    <div>  
        <pre>{{$users}}</pre>
        <table border="1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($users as $user)
                    <tr>
                        <td><input type="text" value="{{$user->name}}"></td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        
    </div>

    <div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    </div>


    
</body>
</html>