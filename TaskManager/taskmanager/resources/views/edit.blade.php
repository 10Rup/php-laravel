<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>

    <h1>Update User</h1>
    <div>
        <form action="{{route('update-user', $user->id)}}" method='post'>
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name : </label> <input type="text" name='name' id='name' value={{$user->name}} placeholder='Enter your name' required> <br><br>
                <label for="email">Email : </label> <input type="email" name='email' id='email' value={{$user->email}} placeholder='Enter your email' required> <br><br>
                <label for="password">Password : </label> <input type="password" name='password' id='password' value={{$user->password}} placeholder='Enter your password' required> 
                <input type="checkbox" id="togglePassword" onclick="togglePasswordVisibility()"><br><br>
            </div>
            <div>
                <button id='updateButton' disabled>Update</button>
            </div>
            <p id='message'></p>
        </form>
    </div>
    <script>

        // check for any change
        const nameField = document.getElementById('name');
        const passwordField = document.getElementById('password');

        const originalData = {
            name: nameField.value,
            password: passwordField.value,
        };

        function checkForChange(){
            if (nameField.value !== originalData.name | passwordField.value !== originalData.password){
                updateButton.disabled = false;
                message.textContent = `old - ${originalData.name}, new - ${nameField.value}`;
            }
            else {
                updateButton.disabled = true;
                message.textContent = "No modifications.";
            }
        };

        nameField.addEventListener('input', checkForChange);
        passwordField.addEventListener('input', checkForChange);



        function togglePasswordVisibility(){
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        }
    </script>





</body>
</html>
