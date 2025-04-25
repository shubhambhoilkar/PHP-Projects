<!DOCTYPE html>
<html>
<head>
    <title>PHP Exception</title>
</head>
<body>
    <h1>PHP Exception and Error Handling Functions</h1>

    <?php
    echo "<h2>1. debug_backtrace()</h2>";
    function a() {
        b();
    }
    function b() {
        print_r(debug_backtrace());
    }
    a();

    echo "<h2>2. debug_print_backtrace()</h2>";
    function c() {
        d();
    }
    function d() {
        debug_print_backtrace();
    }
    c();

    echo "<h2>3. error_clear_last()</h2>";
    var_dump(error_get_last());
    error_clear_last();
    var_dump(error_get_last());

    echo "<h2>4. error_get_last()</h2>";
    $error = error_get_last();
    echo "Last Error: ";
    print_r($error);

    echo "<h2>5. error_log()</h2>";
    if (!mysqli_connect("localhost","sam","","sam_database")){
    error_log("Database error!", 0);}
    echo "<h2>6. error_reporting()</h2>";
    echo "Current Error Reporting Level: " . error_reporting() . "<br>";
    error_reporting(E_ALL & ~E_NOTICE);
    echo "Changed Error Reporting Level (No Notice Errors): " . error_reporting() . "<br>";

    echo "<h2>7. restore_error_handler() and restore_exception_handler()</h2>";
    // Custom error handler
    function myErrorHandler($errno, $errstr) {
        echo "<b>Custom Error:</b> [$errno] $errstr<br>";
    }
    // Custom exception handler
    function myExceptionHandler($exception) {
        echo "<b>Custom Exception:</b> " . $exception->getMessage() . "<br>";
    }

    set_error_handler("myErrorHandler");
    set_exception_handler("myExceptionHandler");

    trigger_error("Testing custom error handler!");
    // throw new Exception("Testing custom Exception handler!"); // Uncomment to test

    restore_error_handler();
    restore_exception_handler();
    echo "Restored to default error and exception handlers.<br>";

    echo "<h2>8. set_error_handler()</h2>";
    set_error_handler(function($errno, $errstr) {
        echo "Custom error caught: [$errno] $errstr<br>";
    });
    trigger_error("This is a custom triggered error!");

    echo "<h2>9. set_exception_handler()</h2>";
    set_exception_handler(function($exception) {
        echo "Custom exception caught: " . $exception->getMessage() . "<br>";
    });
    // throw new Exception("This is a custom thrown exception!"); // Uncomment to test

    echo "<h2>10. trigger_error() and user_error()</h2>";
    trigger_error("This is a triggered warning!", E_USER_WARNING);
    user_error("This is a user generated notice!", E_USER_NOTICE);

    ?>
</body>
</html>
