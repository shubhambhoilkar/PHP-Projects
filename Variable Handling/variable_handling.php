<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Handling in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        h2 {
            color: #007BFF;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 15px;
            background-color: #28a745;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .output {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 4px;
            margin-top: 20px;
            border: 1px solid #ddd;
        }

        .output p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Variable Handling Functions in PHP</h2>
        <form method="POST">
            <label for="input_var">Enter any value:</label>
            <input type="text" id="input_var" name="input_var" required>
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $input_var = $_POST['input_var'];

            // Using various PHP functions to handle the input variable
            echo "<div class='output'>";
            echo "<h3>Variable Handling Results:</h3>";

            // boolval() - Convert to boolean
            echo "<p><strong>boolval:</strong> " . (boolval($input_var) ? 'true' : 'false') . "</p>";

            // debug_zval_dump() - Detailed information about a variable
            echo "<p><strong>debug_zval_dump:</strong> ";
            debug_zval_dump($input_var);
            echo "</p>";

            // doubleval() - Convert to double (float)
            echo "<p><strong>doubleval:</strong> " . doubleval($input_var) . "</p>";

            // empty() - Check if a variable is empty
            echo "<p><strong>empty:</strong> " . (empty($input_var) ? 'true' : 'false') . "</p>";

            // floatval() - Convert to float
            echo "<p><strong>floatval:</strong> " . floatval($input_var) . "</p>";

            // get_defined_vars() - Get all defined variables
            echo "<p><strong>get_defined_vars:</strong> ";
            print_r(get_defined_vars());
            echo "</p>";

            // get_resource_type() - Get resource type (not applicable for string)
            if (is_resource($input_var)) {
                echo "<p><strong>get_resource_type:</strong> " . get_resource_type($input_var) . "</p>";
            } else {
                echo "<p><strong>get_resource_type:</strong> Not a resource</p>";
            }

            // gettype() - Get the type of a variable
            echo "<p><strong>gettype:</strong> " . gettype($input_var) . "</p>";

            // intval() - Convert to integer
            echo "<p><strong>intval:</strong> " . intval($input_var) . "</p>";

            // is_array() - Check if the variable is an array
            echo "<p><strong>is_array:</strong> " . (is_array($input_var) ? 'true' : 'false') . "</p>";

            // is_bool() - Check if the variable is a boolean
            echo "<p><strong>is_bool:</strong> " . (is_bool($input_var) ? 'true' : 'false') . "</p>";

            // is_callable() - Check if the variable is callable (function or method)
            echo "<p><strong>is_callable:</strong> " . (is_callable($input_var) ? 'true' : 'false') . "</p>";

            // is_countable() - Check if the variable is countable
            echo "<p><strong>is_countable:</strong> " . (is_countable($input_var) ? 'true' : 'false') . "</p>";

            // is_double() - Check if the variable is a double (float)
            echo "<p><strong>is_double:</strong> " . (is_double($input_var) ? 'true' : 'false') . "</p>";

            // is_float() - Check if the variable is a float
            echo "<p><strong>is_float:</strong> " . (is_float($input_var) ? 'true' : 'false') . "</p>";

            // is_int() - Check if the variable is an integer
            echo "<p><strong>is_int:</strong> " . (is_int($input_var) ? 'true' : 'false') . "</p>";

            // is_integer() - Check if the variable is an integer (same as is_int)
            echo "<p><strong>is_integer:</strong> " . (is_integer($input_var) ? 'true' : 'false') . "</p>";

            // is_iterable() - Check if the variable is iterable
            echo "<p><strong>is_iterable:</strong> " . (is_iterable($input_var) ? 'true' : 'false') . "</p>";

            // is_long() - Check if the variable is a long integer (same as is_int)
            echo "<p><strong>is_long:</strong> " . (is_long($input_var) ? 'true' : 'false') . "</p>";

            // is_null() - Check if the variable is null
            echo "<p><strong>is_null:</strong> " . (is_null($input_var) ? 'true' : 'false') . "</p>";

            // is_numeric() - Check if the variable is numeric
            echo "<p><strong>is_numeric:</strong> " . (is_numeric($input_var) ? 'true' : 'false') . "</p>";

            // is_object() - Check if the variable is an object
            echo "<p><strong>is_object:</strong> " . (is_object($input_var) ? 'true' : 'false') . "</p>";

            // is_real() - Check if the variable is a real number (same as is_float)
            echo "<p><strong>is_real:</strong> " . (is_real($input_var) ? 'true' : 'false') . "</p>";

            // is_resource() - Check if the variable is a resource
            echo "<p><strong>is_resource:</strong> " . (is_resource($input_var) ? 'true' : 'false') . "</p>";

            // is_scalar() - Check if the variable is scalar
            echo "<p><strong>is_scalar:</strong> " . (is_scalar($input_var) ? 'true' : 'false') . "</p>";

            // is_string() - Check if the variable is a string
            echo "<p><strong>is_string:</strong> " . (is_string($input_var) ? 'true' : 'false') . "</p>";

            // isset() - Check if the variable is set
            echo "<p><strong>isset:</strong> " . (isset($input_var) ? 'true' : 'false') . "</p>";

            // print_r() - Print human-readable information about a variable
            echo "<p><strong>print_r:</strong> ";
            print_r($input_var);
            echo "</p>";

            // serialize() - Convert a variable into a storable representation
            echo "<p><strong>serialize:</strong> " . serialize($input_var) . "</p>";

            // settype() - Set the type of a variable
            settype($input_var, 'string');
            echo "<p><strong>settype (to string):</strong> " . $input_var . "</p>";

            // strval() - Get the string value of a variable
            echo "<p><strong>strval:</strong> " . strval($input_var) . "</p>";

            // unserialize() - Unserialize a variable
            echo "<p><strong>unserialize:</strong> " . unserialize(serialize($input_var)) . "</p>";

            // unset() - Destroy a variable
            unset($input_var);
            echo "<p><strong>unset:</strong> Variable is unset.</p>";

            // var_dump() - Dump information about a variable
            echo "<p><strong>var_dump:</strong> ";
            var_dump($input_var);
            echo "</p>";

            // var_export() - Export a variable as a string representation
            echo "<p><strong>var_export:</strong> ";
            var_export($input_var);
            echo "</p>";

            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
