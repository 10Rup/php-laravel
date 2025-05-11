<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CLI Command Reference</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }
        h1, h2, h3 {
            color: #007bff;
        }
        .topic {
            margin-bottom: 30px;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .code-block {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow-x: auto;
            font-family: monospace;
            font-size: 14px;
            line-height: 1.4;
        }
        .label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <h1>PHP CLI Command Reference</h1>

    <div class="topic">
        <h2>1. Running PHP Scripts from the Command Line</h2>
        <p>The most basic PHP CLI command is executing a PHP script:</p>
        <div class="code-block">
            <span class="label">Command:</span>
            <code>php your_script.php</code>
        </div>
        <p>This command tells the PHP interpreter to execute the code in <code>your_script.php</code>.</p>
    </div>

    <div class="topic">
        <h2>2. PHP CLI Options</h2>
        <p>You can use various options with the <code>php</code> command to control how the script is executed.</p>
        <h3>Common Options</h3>
        <ul>
            <li><code>-v</code>:  Display the PHP version.</li>
            <li><code>-i</code>:  Display PHP configuration information.</li>
            <li><code>-f &lt;file&gt;</code>:  Parse and execute the specified file. (same as just providing the filename)</li>
            <li><code>-r &lt;code&gt;</code>:  Run a single line of PHP code from the command line.</li>
            <li><code>-a</code>:  Interactive mode.</li>
        </ul>
        <div class="code-block">
            <span class="label">Examples:</span>
            <code>
php -v  // Display PHP version
php -i  // Display PHP configuration
php -r "echo 'Hello from CLI';" // Run PHP code directly
php -a // Interactive mode
            </code>
        </div>
    </div>

    <div class="topic">
        <h2>3. Input and Output in CLI</h2>
        <p>When writing CLI applications, you'll often need to handle input and output.</p>
        <h3>Standard Input/Output</h3>
        <div class="code-block">
            <span class="label">Example:</span>
            <code>
&lt;?php
    echo "Enter your name: ";
    $name = trim(fgets(STDIN));
    echo "Hello, " . $name . "!\n";
?&gt;
            </code>
        </div>
        <p>
            <ul>
                <li><code>STDIN</code>:  The standard input stream.  Use <code>fgets(STDIN)</code> to read a line from the user.</li>
                <li><code>STDOUT</code>: The standard output stream.  Use <code>echo</code> to write to the console.</li>
                <li><code>STDERR</code>: The standard error stream.  Useful for displaying error messages.</li>
            </ul>
        </p>
    </div>

    <div class="topic">
        <h2>4. Working with Arguments</h2>
        <p>When you run a PHP script from the command line, you can pass arguments to it.</p>
        <div class="code-block">
            <span class="label">Example:</span>
            <code>
&lt;?php
    // script.php
    echo "Number of arguments: " . $argc . "\n";
    echo "Argument 1: " . $argv[0] . "\n"; // The script name itself
    echo "Argument 2: " . $argv[1] . "\n";
    echo "Argument 3: " . $argv[2] . "\n";
    // To run: php script.php arg1 arg2
?&gt;
            </code>
        </div>
        <p>
            <ul>
                <li><code>$argc</code>:  The number of arguments passed to the script.</li>
                <li><code>$argv</code>:  An array of the arguments. <code>$argv[0]</code> is the name of the script.</li>
            </ul>
        </p>
    </div>

    <div class="topic">
        <h2>5.  PHP Built-in CLI functions</h2>
        <p>
            PHP provides some functions specifically designed for CLI interaction
        </p>
        <ul>
            <li><code>php_sapi_name()</code>: Returns the type of SAPI in use (e.g., "cli", "apache2handler").</li>
            <li><code>is_cli()</code>: Returns true if the script is running from the command line.</li>
        </ul>
        <div class="code-block">
            <span class="label">Example:</span>
            <code>
&lt;?php
    if (php_sapi_name() == 'cli') {
        echo "Running from CLI\n";
    } else {
        echo "Not running from CLI\n";
    }

    if (is_cli()) {
        echo "Also running from CLI\n";
    }
?&gt;
            </code>
        </div>
    </div>

     <div class="topic">
        <h2>6.  Composer</h2>
        <p>
            While not a PHP built-in, Composer is the standard dependency manager for PHP and is essential for many modern PHP CLI workflows.
        </p>
        <p>
            Common Composer commands:
        </p>
        <ul>
            <li><code>composer install</code>: Installs the dependencies listed in the composer.json file.</li>
            <li><code>composer update</code>:  Updates dependencies to the latest version according to the composer.json file.</li>
            <li><code>composer require &lt;package&gt;</code>:  Adds a new dependency to the composer.json file and installs it.</li>
            <li><code>composer dump-autoload</code>:  Regenerates the autoloader.</li>
            <li><code>composer create-project &lt;package&gt; [&lt;directory&gt;]</code>: Creates a new project from a package.</li>
        </ul>
        <div class="code-block">
            <span class="label">Example:</span>
            <code>
composer require monolog/monolog
composer install
            </code>
        </div>
    </div>

    <div class="topic">
        <h2>7. Framework-Specific CLI Commands</h2>
        <p>Many PHP frameworks provide their own CLI tools to help with development.  These are *not* part of PHP itself, but are provided by the framework.</p>
        <h3>Laravel Artisan</h3>
        <p>Laravel's command-line tool is called Artisan.  Here are a few examples:</p>
        <ul>
            <li><code>php artisan make:controller &lt;name&gt;</code>:  Create a new controller class.</li>
            <li><code>php artisan make:model &lt;name&gt;</code>:    Create a new Eloquent model.</li>
            <li><code>php artisan make:migration create_&lt;table&gt;_table</code>: Create a new database migration.</li>
            <li><code>php artisan migrate</code>: Run the database migrations.</li>
            <li><code>php artisan route:list</code>: Display all defined routes.</li>
        </ul>
        <div class="code-block">
            <span class="label">Example:</span>
            <code>
php artisan make:controller UserController
php artisan migrate
            </code>
        </div>
        <h3>Symfony Console</h3>
         <p>Symfony's command-line tool is called Symfony Console.  Here are a few examples:</p>
         <ul>
            <li><code>php bin/console make:controller &lt;name&gt;</code>:  Create a new controller class.</li>
            <li><code>php bin/console doctrine:migrations:migrate</code>: Execute database migrations.</li>
            <li><code>php bin/console route:debug</code>: Display the routes.</li>
         </ul>
         <div class="code-block">
            <span class="label">Example:</span>
            <code>
php bin/console make:controller UserController
php bin/console doctrine:migrations:migrate
            </code>
        </div>
    </div>
    <p>This is a starting point for PHP CLI commands. Each framework has its own extensive set of commands, so refer to their documentation for more details.</p>
</body>
</html>
