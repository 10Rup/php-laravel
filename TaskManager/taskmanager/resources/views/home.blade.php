<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <div>
        <h1>Home Page</h1>
        <a href="{{route('signup')}}">Sign up Page</a>
        <div>
                @foreach($users as $user)
                    <section>                              
                        <p>Name : {{$user->name}}</p>
                        <p>Email : {{$user->email}}</p>
                        <p>Time : {{$user->created_at}}</p>
                        <button type="button" onclick=window.location.href="{{ route('edit-user', $user->id) }}">Edit</button>
                    </section>
                    
                    <!-- <form action="{{route('delete-user', $user->id)}}" method="post" calss="deleteForm">
                        @csrf
                        @method('DELETE')
                        <button type='submit' >Delete</button>
                    </form> -->

                    <form id="delete-form-{{ $user->id }}" action="{{ route('delete-user', $user->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button type="button" onclick="confirmDelete({{ $user }})" style="display: none;">Delete v1</button>
                    <button type="button" onclick="confirm_delete({{ $user }})">Delete</button>
                    <hr>
                @endforeach
            
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        form = document.querySelectorAll('deleteForm')
        form.addEventListener('submit', function(e){
            e.preventDefaout();
            const confirmed = confirm("Delete this user?");
            if(confirmed){
                form.submit();
            };
        });

        function confirmDelete(user) {
          
            const confirmed = confirm(`Delete user ${user.name}?`);
            if(confirmed){
                document.getElementById(`delete-form-${user.id}`).submit();
            }

        };

        function confirm_delete(user) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone!",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${user.id}`).submit();
                }
            });
        };
        


    </script>

</body>
</html>