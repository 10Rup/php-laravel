<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprehensive PHP Reference</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        h2 {
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-top: 30px;
        }
        h3 {
            margin-top: 20px;
        }
        p {
            margin-bottom: 15px;
        }
        ul, ol {
            margin-bottom: 15px;
        }
        .code-block {
            background-color: #f0f0f0;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            overflow-x: auto;
            font-family: monospace;
            font-size: 14px;
            line-height: 1.4;
        }
        .code-block pre {
            margin: 0;
        }

        .function-name {
            font-weight: bold;
            color: #0078d7;
        }

        .topic {
            margin-bottom: 40px;
        }

        /* Improved styling for better readability */
        h2 {
            color: #3498db; /* Blue for sections */
        }
        h3 {
            color: #2c3e50; /* Darker heading for subsections */
        }
        .code-block {
            background-color: #ecf0f1; /* Light gray for code blocks */
            border-color: #bdc3c7; /* Lighter border */
        }
        .function-name {
            color: #e74c3c; /* Red for function names */
        }
        ul li {
            margin-bottom: 8px; /* Add spacing between list items */
        }

    </style>
</head>
<body>
    <h1>Comprehensive PHP Reference</h1>

    <div class="topic">
        <h2>1. Getting Started</h2>
        <h3>Basic Syntax</h3>
        <p>PHP code is embedded within <code>&lt;?php</code> and <code>?&gt;</code> tags.</p>
        <div class="code-block">
            <pre>&lt;?php
    // PHP code here
?&gt;</pre>
        </div>
        <h3>Comments</h3>
        <p>Single-line comments start with <code>//</code> or <code>#</code>. Multi-line comments are enclosed in <code>/*</code> and <code>*/</code>.</p>
        <div class="code-block">
            <pre>&lt;?php
    // This is a single-line comment
    # This is also a single-line comment
    /*
    This is a
    multi-line comment
    */
?&gt;</pre>
        </div>
        <h3>Outputting Content</h3>
        <p>Use <code>echo</code> or <code>print</code> to output text.</p>
        <div class="code-block">
            <pre>&lt;?php
    echo "Hello, world!";
    print "Welcome to PHP";
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>2. Variables and Data Types</h2>
        <h3>Variables</h3>
        <p>Variables in PHP start with a <code>$</code> sign and are case-sensitive.</p>
        <div class="code-block">
            <pre>&lt;?php
    $name = "John Doe";
    $age = 30;
?&gt;</pre>
        </div>
        <h3>Data Types</h3>
        <p>PHP supports various data types:</p>
        <ul>
            <li>String</li>
            <li>Integer</li>
            <li>Float</li>
            <li>Boolean</li>
            <li>Array</li>
            <li>Object</li>
            <li>NULL</li>
        </ul>
        <div class="code-block">
            <pre>&lt;?php
    $name = "John Doe";        // String
    $age = 30;               // Integer
    $price = 19.99;           // Float
    $is_active = true;       // Boolean
    $colors = array("red", "green", "blue"); // Array
    $nothing = NULL;           // NULL
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>3. Operators</h2>
        <h3>Arithmetic Operators</h3>
        <ul>
            <li><code>+</code> (Addition)</li>
            <li><code>-</code> (Subtraction)</li>
            <li><code>*</code> (Multiplication)</li>
            <li><code>/</code> (Division)</li>
            <li><code>%</code> (Modulus)</li>
            <li><code>**</code> (Exponentiation)</li>
        </ul>
        <div class="code-block">
            <pre>&lt;?php
    $x = 10;
    $y = 5;
    $sum = $x + $y; // 15
    $product = $x * $y; // 50
?&gt;</pre>
        </div>
        <h3>Assignment Operators</h3>
        <ul>
            <li><code>=</code> (Assignment)</li>
            <li><code>+=</code>, <code>-=</code>, <code>*=</code>, <code>/=</code>, <code>%=</code> (Compound assignment)</li>
        </ul>
        <div class="code-block">
            <pre>&lt;?php
    $a = 5;
    $a += 3; // $a is now 8
?&gt;</pre>
        </div>
        <h3>Comparison Operators</h3>
        <ul>
            <li><code>==</code> (Equal)</li>
            <li><code>===</code> (Identical)</li>
            <li><code>!=</code>, <code>&lt;&gt;</code> (Not equal)</li>
            <li><code>!==</code> (Not identical)</li>
            <li><code>&gt;</code>, <code>&lt;</code>, <code>&gt;=</code>, <code>&lt;=</code> (Greater than, Less than, etc.)</li>
        </ul>
        <div class="code-block">
            <pre>&lt;?php
    $p = 10;
    $q = "10";
    var_dump($p == $q);  // true
    var_dump($p === $q); // false
?&gt;</pre>
        </div>
        <h3>Logical Operators</h3>
        <ul>
            <li><code>and</code>, <code>&&</code> (Logical AND)</li>
            <li><code>or</code>, <code>||</code> (Logical OR)</li>
            <li><code>xor</code> (Logical XOR)</li>
            <li><code>!</code> (Logical NOT)</li>
        </ul>
        <div class="code-block">
            <pre>&lt;?php
    $is_valid = true;
    $is_admin = false;
    if ($is_valid && !$is_admin) {
        echo "Access granted.";
    }
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>4. Control Structures</h2>
        <h3><code>if</code>, <code>elseif</code>, <code>else</code></h3>
        <div class="code-block">
            <pre>&lt;?php
    $grade = 85;
    if ($grade >= 90) {
        echo "A";
    } elseif ($grade >= 80) {
        echo "B";
    } else {
        echo "C or lower";
    }
?&gt;</pre>
        </div>
        <h3><code>switch</code></h3>
        <div class="code-block">
            <pre>&lt;?php
    $day = "Wednesday";
    switch ($day) {
        case "Monday":
            echo "It's Monday";
            break;
        case "Tuesday":
            echo "It's Tuesday";
            break;
        default:
            echo "It's some other day";
    }
?&gt;</pre>
        </div>
        <h3>Loops</h3>
        <h4><code>for</code> Loop</h4>
        <div class="code-block">
            <pre>&lt;?php
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
?&gt;</pre>
        </div>
        <h4><code>while</code> Loop</h4>
        <div class="code-block">
            <pre>&lt;?php
    $count = 0;
    while ($count < 5) {
        echo $count;
        $count++;
    }
?&gt;</pre>
        </div>
        <h4><code>do-while</code> Loop</h4>
        <div class="code-block">
            <pre>&lt;?php
    $x = 0;
    do {
        echo $x;
        $x++;
    } while ($x < 3);
?&gt;</pre>
        </div>
        <h4><code>foreach</code> Loop</h4>
        <div class="code-block">
            <pre>&lt;?php
    $colors = array("red", "green", "blue");
    foreach ($colors as $color) {
        echo $color;
    }

    $person = array("name" => "Alice", "age" => 25);
    foreach ($person as $key => $value) {
        echo $key . ": " . $value;
    }
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>5. Functions</h2>
        <h3>Defining a Function</h3>
        <div class="code-block">
            <pre>&lt;?php
    function greet($name) {
        return "Hello, " . $name . "!";
    }

    echo greet("Bob"); // Output: Hello, Bob!
?&gt;</pre>
        </div>
        <h3>Function Arguments</h3>
         <div class="code-block">
            <pre>&lt;?php
    function sum(int $a, int $b) : int {
        return $a + $b;
    }

    echo sum(5, 3); // Output: 8
?&gt;</pre>
        </div>
        <h3>Returning Values</h3>
        <div class="code-block">
            <pre>&lt;?php
    function multiply($x, $y) {
        return $x * $y;
    }

    $result = multiply(4, 6);
    echo $result; // Output: 24
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>6. Arrays</h2>
        <h3>Indexed Arrays</h3>
        <div class="code-block">
            <pre>&lt;?php
    $fruits = array("apple", "banana", "cherry");
    echo $fruits[0]; // Output: apple
?&gt;</pre>
        </div>
        <h3>Associative Arrays</h3>
        <div class="code-block">
            <pre>&lt;?php
    $age = array("Peter" => 30, "Mary" => 25);
    echo $age["Peter"]; // Output: 30
?&gt;</pre>
        </div>
        <h3>Array Functions</h3>
        <p>PHP provides many built-in array functions.</p>
        <div class="code-block">
            <pre>&lt;?php
    $numbers = array(1, 2, 3, 4, 5);
    echo count($numbers); // Output: 5

    $reversed = array_reverse($numbers);
    print_r($reversed); // Output: Array ( [0] => 5, [1] => 4, [2] => 3, [3] => 2, [4] => 1 )

    array_push($numbers, 6);
    print_r($numbers); // Output: Array ( [0] => 1, [1] => 2, [2] => 3, [3] => 4, [4] => 5, [5] => 6 )
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>7. Superglobals</h2>
        <p>Superglobals are predefined variables that are always accessible, regardless of scope.</p>
        <ul>
            <li><code>$_GET</code>: Variables from the URL string.</li>
            <li><code>$_POST</code>: Variables from HTTP POST.</li>
            <li><code>$_SERVER</code>: Server and execution environment information.</li>
            <li><code>$_SESSION</code>: Session variables.</li>
            <li><code>$_COOKIE</code>: Cookie variables.</li>
            <li><code>$_FILES</code>:  Information about uploaded files</li>
            <li><code>$_ENV</code>: Environment variables</li>
            <li><code>$_REQUEST</code>: Contains $_GET, $_POST, and $_COOKIE data.</li>
            <li><code>$GLOBALS</code>:  References all variables available in the global scope</li>
        </ul>
        <div class="code-block">
            <pre>&lt;?php
    // Example using $_GET (assuming URL is page.php?name=John)
    if (isset($_GET['name'])) {
        echo "Hello, " . $_GET['name'] . "!";
    }

    echo "Server name: " . $_SERVER['SERVER_NAME'];
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>8. String Functions</h2>
        <p>PHP provides many functions to manipulate strings.</p>
        <div class="code-block">
            <pre>&lt;?php
    $text = "  Hello, world!  ";
    echo strlen($text); // Output: 17
    echo trim($text);  // Output: Hello, world!
    echo strtolower($text); // Output:   hello, world!
    echo strtoupper($text); // Output:   HELLO, WORLD!
    echo str_replace("world", "PHP", $text); // Output:   Hello, PHP!
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>9. File Handling</h2>
        <h3>Opening and Closing Files</h3>
        <div class="code-block">
            <pre>&lt;?php
    $file = fopen("data.txt", "r"); // Open for reading
    if ($file) {
       //process
       fclose($file);
    }
?&gt;</pre>
        </div>
        <h3>Reading from a File</h3>
        <div class="code-block">
            <pre>&lt;?php
    $file = fopen("data.txt", "r");
    if ($file) {
        while (($line = fgets($file)) !== false) {
            echo $line . "&lt;br&gt;";
        }
        fclose($file);
    }
?&gt;</pre>
        </div>
        <h3>Writing to a File</h3>
        <div class="code-block">
            <pre>&lt;?php
    $file = fopen("data.txt", "w"); // Open for writing (overwrites)
    if ($file) {
        fwrite($file, "New data\n");
        fclose($file);
    }
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>10.  Classes and Objects</h2>
        <h3>Defining a Class</h3>
        <div class="code-block">
        <pre>&lt;?php
    class Car {
        public $color;
        public $model;

        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }

        public function drive() {
            echo "Driving a " . $this->color . " " . $this->model . ".&lt;br&gt;";
        }
    }
?&gt;
        </pre>
        </div>
        <h3>Creating an Object</h3>
        <div class="code-block">
        <pre>&lt;?php
    $myCar = new Car("red", "Toyota");
    $myCar->drive();
?&gt;
        </pre>
        </div>
    </div>

    <div class="topic">
        <h2>11.  Namespaces</h2>
        <p>Namespaces help in organizing PHP code and prevent naming collisions.</p>
        <div class="code-block">
        <pre>&lt;?php
    namespace MyProject\Database;

    class Connection {
        public function connect() {
            echo "Connecting to the database in MyProject\Database namespace.&lt;br&gt;";
        }
    }

    use MyProject\Database\Connection;  // Import the class

    $db = new Connection();
    $db->connect();
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>12.  Errors and Exceptions</h2>
        <h3>Error Handling</h3>
        <div class="code-block">
        <pre>&lt;?php
    //error handler function
    function customError($errno, $errstr) {
      echo "<b>Error:</b> [$errno] $errstr&lt;br&gt;";
    }

    //set error handler
    set_error_handler("customError");

    echo($test);
?&gt;</pre>
        </div>
        <h3>Exceptions</h3>
        <div class="code-block">
        <pre>&lt;?php
    function divide($x, $y) {
      if ($y == 0) {
        throw new Exception("Division by zero");
      }
      return $x / $y;
    }

    try {
      echo divide(5, 0);
    } catch (Exception $e) {
      echo "Caught exception: " . $e->getMessage() . "&lt;br&gt;";
    }
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>13.  Sessions</h2>
        <p>Sessions allow you to store information about a user across multiple pages.</p>
        <div class="code-block">
        <pre>&lt;?php
    session_start();
    $_SESSION["username"] = "JohnDoe";
    echo "Session started for " . $_SESSION["username"] . ".&lt;br&gt;";
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>14.  Cookies</h2>
        <p>Cookies are small files stored on the user's computer.</p>
        <div class="code-block">
        <pre>&lt;?php
    $cookie_name = "user";
    $cookie_value = "Alex";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Expires in 30 days

    if(isset($_COOKIE[$cookie_name])) {
      echo "Cookie '" . $cookie_name . "' is set!&lt;br&gt;";
      echo "Value is: " . $_COOKIE[$cookie_name] . "&lt;br&gt;";
    }
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>15.  Regular Expressions</h2>
        <p>Regular expressions are used for pattern matching in strings.</p>
        <div class="code-block">
        <pre>&lt;?php
    $str = "Visit W3Schools";
    $pattern = "/w3schools/i"; // Case-insensitive
    echo preg_match($pattern, $str) . "&lt;br&gt;"; // Outputs 1 (match found)

    $matches = [];
    preg_match_all($pattern, $str, $matches);
    print_r($matches);
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>16.  JSON Functions</h2>
        <p>Functions for working with JSON data.</p>
        <div class="code-block">
        <pre>&lt;?php
    $json_string = '{"name":"John","age":30}';
    $obj = json_decode($json_string);
    echo $obj->name . "&lt;br&gt;";

    $arr = array("name" => "John", "age" => 30);
    echo json_encode($arr) . "&lt;br&gt;";
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>17.  cURL Functions</h2>
        <p>cURL functions are used for making HTTP requests.</p>
        <div class="code-block">
        <pre>&lt;?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.example.com");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>18.  MySQLi Functions</h2>
        <p>Functions for interacting with MySQL databases.</p>
        <div class="code-block">
        <pre>&lt;?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "&lt;br&gt;";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>19.  PDO Functions</h2>
        <p>PHP Data Objects (PDO) is a database access layer providing a uniform method of accessing multiple databases.</p>
        <div class="code-block">
        <pre>&lt;?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT id, firstname, lastname FROM MyGuests";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      // set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      foreach($stmt->fetchAll() as $row) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "&lt;br&gt;";
      }
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
?&gt;</pre>
        </div>
    </div>

    <div class="topic">
        <h2>20. Date and Time Functions</h2>
        <p>Functions for working with dates and times.</p>
        <div class="code-block">
            <pre>&lt;?php
    echo "Today is " . date("Y/m/d") . "&lt;br&gt;";
    echo "Current time is " . date("h:i:sa") . "&lt;br&gt;";

    $timestamp = strtotime("10:30pm March 15 2024");
    echo date("Y-m-d h:i:sa", $timestamp) . "&lt;br&gt;";
?&gt;</pre>
        </div>
    </div>

    <p>This is a comprehensive reference of PHP commands and code. Remember that PHP code needs to be executed on a server with PHP installed.</p>
</body>
</html>
