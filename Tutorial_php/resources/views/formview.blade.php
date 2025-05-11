


<div>
    <h1>Form View</h1>
    {{print_r($errors)}}
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div>
            {{$error}}
        </div>
        @endforeach
    @endif
    <form action="add-user" method="POST">
        @csrf
        <div class="input-wrapper">
            <input type="text" id="fm-in" placeholder="Enter User Name" name="username" value="{{old('username')}}">
            <span style="color:red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" id="fm-in" placeholder="Enter User Email" name="email" value="{{old('email')}}">
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" id="fm-in" placeholder="Enter User City" name="city" value="{{old('city')}}">
            <span style="color:red;">@error('city'){{$message}}@enderror</span>
        </div>

        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>

<form action="save-data" method="POST">
    @csrf
    <div>
        <h3>Checkbox Skills</h3>
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="JAVA" id="java">
        <label for="java">JAVA</label>
        <input type="checkbox" name="skill[]" value="PYTHON" id="python">
        <label for="python">PYTHON</label>
        <input type="checkbox" name="skill[]" value="REACT" id="react">
        <label for="react">REACT</label>
    </div>

    <div>
        <h3>Radio Gender</h3>
        <input type="radio" name="gender" value="Male" id="m">
        <label for="m">Male</label>
        <input type="radio" name="gender" value="Female" id="f">
        <label for="f">Female</label>
    </div>



    <div>
        <h3>Select City</h3>
        <select name="city" id="city">
            <option value="Raipur">Raipur</option>
            <option value="Delhi">Delhi</option>
            <option value="Mumbai">Mumbai</option>
        </select>
    </div>

    <div>
        <h4>Age</h4>
        <input type="range" name="age" min="18" max="100">
    </div>

    <button>Save Data</button>

</form>



<style>
    #fm-in {
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