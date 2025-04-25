<!DOCTYPE html>
<html>
  <head>
    <title>Array built-in functions.</title>
  </head>
  <body>
<?php

echo "<h1>PHP Arrays and Functions</h1>";

// 1. Indexed Array
$colors = array("Sam", "Shubham", "Suyash");
echo "<h3>Indexed Array:</h3>";
print_r($colors);

// 2. Associative Array
$age = array("Sam"=>35, "Shubham"=>37, "Suyash"=>90);
echo "<h3>Associative Array:</h3>";
print_r($age);

// 3. Multidimensional Array
$cars = array(
  array("Ferrari", 22, 18),
  array("BMW", 15, 13),
  array("Mercedies", 5, 2)
);
echo "<h3>Multidimensional Array:</h3>";
print_r($cars);

// 4. array_change_key_case
echo "<h3>array_change_key_case:</h3>";
$age = array("Sam"=>35, "Shubham"=>37, "Suyash"=>43);
print_r(array_change_key_case($age, CASE_UPPER));

// 5. array_chunk
echo "<h3>array_chunk:</h3>";
$colors = array("red", "green", "blue", "yellow");
print_r(array_chunk($colors, 2));

// 6. array_column
echo "<h3>array_column:</h3>";
$records = [
    ['id' => 2135, 'first_name' => 'Sam'],
    ['id' => 3245, 'first_name' => 'Shubham']
];
print_r(array_column($records, 'first_name'));

// 7. array_combine
echo "<h3>array_combine:</h3>";
$a = ["Sam", "Suyash", "Shubham"];
$b = [9, 99, 9601];
print_r(array_combine($a, $b));

// 8. array_count_values
echo "<h3>array_count_values:</h3>";
$values = ["A", "B", "A", "C", "B"];
print_r(array_count_values($values));

// 9. array_diff
echo "<h3>array_diff:</h3>";
$a1 = ["a" => "red", "b" => "green", "c" => "blue"];
$a2 = ["a" => "red", "b" => "yellow"];
print_r(array_diff($a1, $a2));

// 10. array_filter
echo "<h3>array_filter:</h3>";
function test_odd($var) {
  return $var % 2 == 1;
}
$a = [1, 2, 3, 4, 5, 6];
print_r(array_filter($a, "test_odd"));

// 11. array_key_exists
echo "<h3>array_key_exists:</h3>";
$age = array("Sam"=>35, "Shubham"=>37);
echo array_key_exists("Sam", $age) ? "Key exists" : "Key does not exist";

// 12. array_keys
echo "<h3>array_keys:</h3>";
$age = array("Sam"=>35, "Shubham"=>37);
print_r(array_keys($age));

// 13. array_map
echo "<h3>array_map:</h3>";
function square($n) {
  return $n * $n;
}
print_r(array_map("square", [1, 2, 3, 4]));

// 14. array_merge
echo "<h3>array_merge:</h3>";
$a1 = ["red", "green"];
$a2 = ["blue", "yellow"];
print_r(array_merge($a1, $a2));

// 15. array_pop
echo "<h3>array_pop:</h3>";
$colors = ["red", "green", "blue"];
array_pop($colors);
print_r($colors);

// 16. array_push
echo "<h3>array_push:</h3>";
array_push($colors, "black");
print_r($colors);

// 17. array_reverse
echo "<h3>array_reverse:</h3>";
$colors = ["a" => "red", "b" => "green", "c" => "blue"];
print_r(array_reverse($colors));

// 18. array_search
echo "<h3>array_search:</h3>";
$colors = ["a" => "red", "b" => "green", "c" => "blue"];
echo array_search("green", $colors);

// 19. array_slice
echo "<h3>array_slice:</h3>";
$colors = ["red", "green", "blue", "yellow"];
print_r(array_slice($colors, 1, 2));

// 20. array_unique
echo "<h3>array_unique:</h3>";
$input = ["a" => "green", "red", "b" => "green", "blue", "red"];
print_r(array_unique($input));

// 21. array_values
echo "<h3>array_values:</h3>";
$age = array("Sam"=>35, "Shubham"=>37);
print_r(array_values($age));

// 22. in_array
echo "<h3>in_array:</h3>";
$colors = ["red", "green", "blue"];
echo in_array("green", $colors) ? "Found" : "Not found";


echo "<h1>Advanced PHP Array Functions</h1>";

// array_diff_assoc
echo "<h3>array_diff_assoc:</h3>";
$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "red", "b" => "blue", "c" => "green");
print_r(array_diff_assoc($a1, $a2));

// array_diff_key
echo "<h3>array_diff_key:</h3>";
$a1 = array("a" => "red", "b" => "green");
$a2 = array("c" => "blue", "b" => "green");
print_r(array_diff_key($a1, $a2));

// array_diff_uassoc
echo "<h3>array_diff_uassoc:</h3>";
function compare_keys($a, $b) {
    return strcmp($a, $b);
}
$a1 = array("a" => "red", "b" => "green");
$a2 = array("a" => "red", "b" => "blue");
print_r(array_diff_uassoc($a1, $a2, "compare_keys"));

// array_diff_ukey
echo "<h3>array_diff_ukey:</h3>";
print_r(array_diff_ukey($a1, $a2, "compare_keys"));

// array_fill
echo "<h3>array_fill:</h3>";
print_r(array_fill(0, 5, "banana"));

// array_fill_keys
echo "<h3>array_fill_keys:</h3>";
$keys = ["a", "b", "c"];
print_r(array_fill_keys($keys, "apple"));

// array_flip
echo "<h3>array_flip:</h3>";
$fruits = ["a" => "apple", "b" => "banana"];
print_r(array_flip($fruits));

// array_intersect_assoc
echo "<h3>array_intersect_assoc:</h3>";
$a1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$a2 = array("a" => "green", "b" => "yellow", "blue");
print_r(array_intersect_assoc($a1, $a2));

// array_intersect_key
echo "<h3>array_intersect_key:</h3>";
print_r(array_intersect_key($a1, $a2));

// array_intersect_uassoc
echo "<h3>array_intersect_uassoc:</h3>";
print_r(array_intersect_uassoc($a1, $a2, "compare_keys"));

// array_intersect_ukey
echo "<h3>array_intersect_ukey:</h3>";
print_r(array_intersect_ukey($a1, $a2, "compare_keys"));

// array_merge_recursive
echo "<h3>array_merge_recursive:</h3>";
$a1 = ["color" => ["favorite" => "red"], 5];
$a2 = ["color" => ["favorite" => "green"], "vegetable" => "carrot"];
print_r(array_merge_recursive($a1, $a2));

// array_multisort
echo "<h3>array_multisort:</h3>";
$a = array(2, 1, 3);
$b = array("orange", "apple", "banana");
array_multisort($a, $b);
print_r($a);
print_r($b);

// array_pad
echo "<h3>array_pad:</h3>";
$input = array("apple", "banana");
print_r(array_pad($input, 5, "orange"));

// array_product
echo "<h3>array_product:</h3>";
print_r(array_product(array(2, 3, 4)));

// array_rand
echo "<h3>array_rand:</h3>";
$input = array("a", "b", "c", "d");
echo $input[array_rand($input)];

// array_reduce
echo "<h3>array_reduce:</h3>";
function sum($carry, $item) {
  return $carry + $item;
}
print_r(array_reduce([1, 2, 3, 4], "sum"));

// array_replace
echo "<h3>array_replace:</h3>";
$base = array("a" => "orange", "b" => "banana", "c" => "apple");
$replacements = array("a" => "pineapple", "c" => "grape");
print_r(array_replace($base, $replacements));

// array_replace_recursive
echo "<h3>array_replace_recursive:</h3>";
$base = array("a" => array("red"), "b" => array("green", "blue"));
$replacements = array("a" => array("yellow"), "b" => array("black"));
print_r(array_replace_recursive($base, $replacements));

// array_shift
echo "<h3>array_shift:</h3>";
$fruits = ["orange", "banana", "apple"];
array_shift($fruits);
print_r($fruits);

// array_splice
echo "<h3>array_splice:</h3>";
$input = ["red", "green", "blue", "yellow"];
array_splice($input, 2);
print_r($input);

// array_udiff
echo "<h3>array_udiff:</h3>";
function compare_values($a, $b) {
    return strcmp($a, $b);
}
$a1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$a2 = ["a" => "GREEN", "B" => "brown", "yellow"];
print_r(array_udiff($a1, $a2, "compare_values"));

?>

</body>
</html>