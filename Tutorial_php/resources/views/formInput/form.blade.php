<div>
    <h1>Form View</h1>
    <form action="add-user" method="POST">
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name" name="username">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Email" name="email">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User City" name="city">
        </div>

        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>

<style>
    input {
        border: purple 2px solid;
        height: 40px;
        width: 200px;
        color: darkblue;
        cursor: pointer;
    }

    .input-wrapper{
        margin: 10px;
    }
    button {
        background-color: purple;
        color: yellow;
        width: 200px;
        height: 40px;
    }
</style>