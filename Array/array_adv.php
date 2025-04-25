<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
	<?php

echo "<h1>PHP Array Functions - Complete Examples</h1>";

echo "<hr><h3>array_diff_assoc()</h3>";
$a1 = ["a" => "red", "b" => "green", "c" => "blue"];
$a2 = ["a" => "red", "b" => "blue", "c" => "green"];
print_r(array_diff_assoc($a1, $a2));

echo "<hr><h3>array_diff_key()</h3>";
$a1 = ["a" => "red", "b" => "green"];
$a2 = ["c" => "blue", "b" => "green"];
print_r(array_diff_key($a1, $a2));

echo "<hr><h3>array_diff_uassoc()</h3>";
function my_diff_uassoc($a, $b) { return strcmp($a, $b); }
$a1 = ["a" => "red", "b" => "green"];
$a2 = ["a" => "red", "b" => "blue"];
print_r(array_diff_uassoc($a1, $a2, "my_diff_uassoc"));

echo "<hr><h3>array_diff_ukey()</h3>";
function my_diff_ukey($a, $b) { return strcmp($a, $b); }
print_r(array_diff_ukey($a1, $a2, "my_diff_ukey"));

echo "<hr><h3>array_fill()</h3>";
print_r(array_fill(0, 5, "banana"));

echo "<hr><h3>array_fill_keys()</h3>";
$keys = ["a", "b", "c"];
print_r(array_fill_keys($keys, "apple"));

echo "<hr><h3>array_flip()</h3>";
$fruits = ["a" => "apple", "b" => "banana"];
print_r(array_flip($fruits));

echo "<hr><h3>array_intersect_assoc()</h3>";
$a1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$a2 = ["a" => "green", "b" => "yellow", "blue"];
print_r(array_intersect_assoc($a1, $a2));

echo "<hr><h3>array_intersect_key()</h3>";
print_r(array_intersect_key($a1, $a2));

echo "<hr><h3>array_intersect_uassoc()</h3>";
print_r(array_intersect_uassoc($a1, $a2, "my_diff_uassoc"));

echo "<hr><h3>array_intersect_ukey()</h3>";
print_r(array_intersect_ukey($a1, $a2, "my_diff_ukey"));

echo "<hr><h3>array_merge_recursive()</h3>";
$a1 = ["color" => ["favorite" => "red"], 5];
$a2 = ["color" => ["favorite" => "green"], "vegetable" => "carrot"];
print_r(array_merge_recursive($a1, $a2));

echo "<hr><h3>array_multisort()</h3>";
$a = [2, 1, 3];
$b = ["orange", "apple", "banana"];
array_multisort($a, $b);
print_r($a);
print_r($b);

echo "<hr><h3>array_pad()</h3>";
$input = ["apple", "banana"];
print_r(array_pad($input, 5, "orange"));

echo "<hr><h3>array_product()</h3>";
echo array_product([2, 3, 4]);

echo "<hr><h3>array_rand()</h3>";
$input = ["a", "b", "c", "d"];
echo $input[array_rand($input)];

echo "<hr><h3>array_reduce()</h3>";
function sum($carry, $item) { return $carry + $item; }
echo array_reduce([1, 2, 3, 4], "sum");

echo "<hr><h3>array_replace()</h3>";
$base = ["a" => "orange", "b" => "banana", "c" => "apple"];
$replacements = ["a" => "pineapple", "c" => "grape"];
print_r(array_replace($base, $replacements));

echo "<hr><h3>array_replace_recursive()</h3>";
$base = ["a" => ["red"], "b" => ["green", "blue"]];
$replacements = ["a" => ["yellow"], "b" => ["black"]];
print_r(array_replace_recursive($base, $replacements));

echo "<hr><h3>array_shift()</h3>";
$fruits = ["orange", "banana", "apple"];
array_shift($fruits);
print_r($fruits);

echo "<hr><h3>array_splice()</h3>";
$input = ["red", "green", "blue", "yellow"];
array_splice($input, 2);
print_r($input);

echo "<hr><h3>array_udiff()</h3>";
function compare_values($a, $b) { return strcmp($a, $b); }
$a1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$a2 = ["a" => "GREEN", "B" => "brown", "yellow"];
print_r(array_udiff($a1, $a2, "compare_values"));

echo "<hr><h3>array_udiff_assoc()</h3>";
print_r(array_udiff_assoc($a1, $a2, "compare_values"));

echo "<hr><h3>array_udiff_uassoc()</h3>";
print_r(array_udiff_uassoc($a1, $a2, "compare_values", "compare_values"));

echo "<hr><h3>array_uintersect()</h3>";
print_r(array_uintersect($a1, $a2, "compare_values"));

echo "<hr><h3>array_uintersect_assoc()</h3>";
print_r(array_uintersect_assoc($a1, $a2, "compare_values"));

echo "<hr><h3>array_uintersect_uassoc()</h3>";
print_r(array_uintersect_uassoc($a1, $a2, "compare_values", "compare_values"));

echo "<hr><h3>array_unique()</h3>";
$input = ["a" => "green", "red", "b" => "green", "blue", "red"];
print_r(array_unique($input));

echo "<hr><h3>array_unshift()</h3>";
$queue = ["orange", "banana"];
array_unshift($queue, "apple", "raspberry");
print_r($queue);

echo "<hr><h3>array_values()</h3>";
$values = ["Size" => "XL", "Color" => "Gold"];
print_r(array_values($values));

echo "<hr><h3>array_walk()</h3>";
function my_function(&$value, $key) {
    $value = "$key : $value";
}
$array = ["a" => "apple", "b" => "banana"];
array_walk($array, "my_function");
print_r($array);

echo "<hr><h3>array_walk_recursive()</h3>";
$fruits = ["sweet" => ["a" => "apple", "b" => "banana"]];
array_walk_recursive($fruits, "my_function");
print_r($fruits);

echo "<hr><h3>arsort()</h3>";
$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
arsort($age);
print_r($age);

echo "<hr><h3>asort()</h3>";
$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
asort($age);
print_r($age);

echo "<hr><h3>compact()</h3>";
$firstname = "Peter";
$lastname = "Parker";
$age = 28;
print_r(compact("firstname", "lastname", "age"));

echo "<hr><h3>count()</h3>";
$arr = [1, 2, 3, 4];
echo count($arr);

echo "<hr><h3>current()</h3>";
$fruits = ["apple", "banana", "cherry"];
echo current($fruits);

echo "<hr><h3>each()</h3>";
$fruits = ["a" => "apple", "b" => "banana"];
print_r(each($fruits));

echo "<hr><h3>end()</h3>";
$fruits = ["apple", "banana", "cherry"];
echo end($fruits);

echo "<hr><h3>extract()</h3>";
$a = ["var1" => "value1", "var2" => "value2"];
extract($a);
echo $var1 . " and " . $var2;

echo "<hr><h3>in_array()</h3>";
$people = ["John", "Mike", "Anna"];
var_dump(in_array("Mike", $people));

echo "<hr><h3>key()</h3>";
$fruits = ["a" => "apple", "b" => "banana"];
echo key($fruits);

echo "<hr><h3>krsort()</h3>";
$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
krsort($age);
print_r($age);

echo "<hr><h3>ksort()</h3>";
$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
ksort($age);
print_r($age);

echo "<hr><h3>list()</h3>";
$my_array = ["Dog", "Cat", "Horse"];
list($a, $b, $c) = $my_array;
echo "$a, $b, $c";

echo "<hr><h3>natcasesort()</h3>";
$arr = ["img12.png", "img10.png", "img2.png", "img1.png"];
natcasesort($arr);
print_r($arr);

echo "<hr><h3>natsort()</h3>";
$arr = ["img12.png", "img10.png", "img2.png", "img1.png"];
natsort($arr);
print_r($arr);

echo "<hr><h3>next()</h3>";
$fruits = ["apple", "banana", "cherry"];
echo next($fruits);

echo "<hr><h3>pos()</h3>";
$fruits = ["apple", "banana", "cherry"];
echo pos($fruits);

echo "<hr><h3>prev()</h3>";
prev($fruits); // Move cursor back
echo current($fruits);

echo "<hr><h3>range()</h3>";
print_r(range(0, 5));

echo "<hr><h3>reset()</h3>";
reset($fruits);
echo current($fruits);

echo "<hr><h3>rsort()</h3>";
$fruits = ["apple", "orange", "banana"];
rsort($fruits);
print_r($fruits);

echo "<hr><h3>shuffle()</h3>";
$numbers = [1, 2, 3, 4, 5];
shuffle($numbers);
print_r($numbers);

echo "<hr><h3>sizeof()</h3>";
$arr = [1, 2, 3, 4];
echo sizeof($arr);

echo "<hr><h3>sort()</h3>";
sort($numbers);
print_r($numbers);

echo "<hr><h3>uasort()</h3>";
$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana"];
uasort($fruits, "strcmp");
print_r($fruits);

echo "<hr><h3>uksort()</h3>";
uksort($fruits, "strcmp");
print_r($fruits);

echo "<hr><h3>usort()</h3>";
usort($numbers, "strcmp");
print_r($numbers);

?>

</body>
</html>