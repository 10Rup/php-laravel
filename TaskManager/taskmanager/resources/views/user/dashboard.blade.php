<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>User's Dashboard</h1>
    <h2>User : {{ auth()->user()->name }}</h2>
    <a href="{{ route('create-task') }}">Add Task</a>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button>Logout</button>
    </form>
</body>
</html>