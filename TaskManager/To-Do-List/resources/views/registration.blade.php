<div>
    <h1>Registration Page</h1>
    <form action=  "{{route('newUser')}}" method="post">
        @csrf

        <label for="username">Username:</label>
        <input type="text" id="username" name="username"></label>

        <button>Submit</button>
    </form>
</div>
