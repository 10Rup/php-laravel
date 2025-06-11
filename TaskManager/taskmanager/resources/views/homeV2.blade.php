<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <div>
        <h1>Home Page v2</h1>
        <a href="{{route('signup')}}">Sign up Page</a>
        <a href="{{ route('login-page') }}">Sign in Page</a>
        <div>
            @foreach($users as $user)
                <div x-data="{ name: '{{ $user->name }}', email: '{{ $user->email }}' }">
                    <template x-if="$store.editState.editingUserId !== {{ $user->id }}">
                        <div>
                            <p>Name : <span x-text="name"></span></p>
                            <p>Email : <span x-text="email"></span></p>
                            <button @click="$store.editState.editingUserId = {{ $user->id }}">Edit</button>
                        </div>
                        
                    </template>

                    <template x-if="$store.editState.editingUserId === {{ $user->id }}">
                        <form method="POST" action="{{ route('update-user', $user->id) }}">
                            @csrf
                            @method('PUT')
                            <p>Name : <input type="text" name="name" x-model="name" required></p>
                            

                            <p>Email : <input type="email" name="email" x-model="email" required></p>
                            

                            <button type="submit">Save</button>
                            <button type="button" @click="$store.editState.editingUserId = null">Cancel</button>
                        </form>
                    </template>
                </div>
            @endforeach

            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('editState',{
                editingUserId: null
            });
        });
    </script>
    
</body>
</html>