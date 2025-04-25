
<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Functions</title>
</head>
<body>
    <h1>PHP Array Functions - Organized Examples</h1>

    <?php
    echo "<h2>1. Array Difference Functions</h2>";
    $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
    $a2 = ["a" => "red", "b" => "green", "e" => "blue"];
    print_r(array_diff($a1, $a2));  echo "<br>";
    print_r(array_diff_assoc($a1, $a2));     echo "<br>";
    print_r(array_diff_key($a1, $a2));   echo "<br>";
    print_r(array_diff_uassoc($a1, $a2, "strcasecmp"));   echo "<br>";
    print_r(array_diff_ukey($a1, $a2, "strcasecmp"));   echo "<br>";

    echo "<h2>2. Array Intersection Functions</h2>";
    print_r(array_intersect($a1, $a2));    echo "<br>";
    print_r(array_intersect_assoc($a1, $a2));      echo "<br>";
    print_r(array_intersect_key($a1, $a2));   echo "<br>";
    print_r(array_intersect_uassoc($a1, $a2, "strcasecmp"));    echo "<br>";
    print_r(array_intersect_ukey($a1, $a2, "strcasecmp"));   echo "<br>";

    echo "<h2>3. Merge / Replace Functions</h2>";
    print_r(array_merge($a1, $a2));   echo "<br>";
    print_r(array_merge_recursive($a1, $a2));   echo "<br>";
    print_r(array_replace($a1, $a2));   echo "<br>";
    print_r(array_replace_recursive($a1, $a2));   echo "<br>";

    echo "<h2>4. Sorting Functions</h2>";
    $sortArray = ["a" => 4, "b" => 8, "c" => -1, "d" => 0];
    asort($sortArray); print_r($sortArray);   echo "<br>";
    arsort($sortArray); print_r($sortArray);   echo "<br>";
    ksort($sortArray); print_r($sortArray);   echo "<br>";
    krsort($sortArray); print_r($sortArray);   echo "<br>";
    sort($sortArray); print_r($sortArray);   echo "<br>";
    rsort($sortArray); print_r($sortArray);   echo "<br>";
    uasort($sortArray, "strcmp"); print_r($sortArray);   echo "<br>";
    uksort($sortArray, "strcmp"); print_r($sortArray);   echo "<br>";
    usort($sortArray, "strcmp"); print_r($sortArray);   echo "<br>";
    natcasesort($sortArray); print_r($sortArray);   echo "<br>";
    natsort($sortArray); print_r($sortArray);   echo "<br>";

    echo "<h2>5. Map / Filter / Walk Functions</h2>";
    function cube($n) { return($n*$n*$n); }
    $a = [1, 2, 3, 4, 5];
    print_r(array_map("cube", $a));
    function odd($var) { return($var & 1); }
    print_r(array_filter($a, "odd"));
    function myfunction($value, $key) { echo "The key $key has the value $value<br>"; }
    array_walk($a1, "myfunction");

    echo "<h2>6. Pointer Functions</h2>";
    $colors = ["red", "green", "blue"];
    echo "The current pointer is: ".current($colors);   echo "<br>";
    echo "The next pointer is: ".next($colors);   echo "<br>";
    echo "The previous pointer was: ".prev($colors);   echo "<br>";
    echo "The end pointer is: ".end($colors);   echo "<br>";
    echo "The reset pointer is: ".reset($colors);   echo "<br>";

    echo "<h2>7. Utility Functions</h2>";
    echo count($a1);   echo "<br>";
    echo in_array("red", $colors) ? "Yes" : "No";   echo "<br>";
    echo array_key_exists("a", $a1);   echo "<br>";
    print_r(array_keys($a1));   echo "<br>";
    print_r(array_values($a1));   echo "<br>";
    echo array_search("green", $a1);   echo "<br>";

    echo "<h2>8. Other Useful Functions</h2>";
    print_r(array_chunk($a, 2));   echo "<br>";
    print_r(array_column([["id"=>1,"name"=>"A"],["id"=>2,"name"=>"B"]], "name"));   echo "<br>";
    print_r(array_combine(["a","b","c"], [1,2,3]));   echo "<br>";
    print_r(array_fill(0, 4, "banana"));   echo "<br>";
    print_r(array_fill_keys(["a", "b"], "orange"));   echo "<br>";
    print_r(array_pad(["red","green"],5,"blue"));   echo "<br>";
    print_r(array_product([2,3,4]));   echo "<br>";
    echo array_sum([2,3,4]);   echo "<br>";
    print_r(array_reverse([1,2,3]));   echo "<br>";
    shuffle($colors); print_r($colors);   echo "<br>";
    print_r(range(0,5));   echo "<br>";
    ?>

</body>
</html>
