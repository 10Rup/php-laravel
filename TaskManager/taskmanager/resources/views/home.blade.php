<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    {{$users}}
    <div>
        <h1>Home Page</h1>
        <a href="{{route('signup')}}">Sign up Page</a>
        <div>
            
                
                @foreach($users as $user)
                    <section>
                        <form action="{{route('edit-user', $user->id)}}" method="get">
                            
                            <p>Name : {{$user->name}}</p>
                            <p>Email : {{$user->email}}</p>
                            <p>Time : {{$user->created_at}}</p>
                            <button>Edit</button>
                            <hr>
                        </form>
                    </section>
                @endforeach
            
        </div>
    </div>
</body>
</html>