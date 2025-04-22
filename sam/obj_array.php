<!DOCTYPE html>
<html>
<body>

<pre>
<?php
class Full_Stack {
  public $frontend;
  public $backend;
  public $database;
  public function __construct($frontend, $backend, $database) {
    $this->frontend = $frontend;
    $this->backend = $backend;
    $this->database = $database;
  }
  public function message1() {
    return "We use " . $this->frontend . " for frontend, " . $this->backend . " for backend and " . $this->database ." for database.";
  }

  static function message2($frontend, $backend, $database){
    return "We use $frontend for frontend, $backend for backend and $database for databse.";
  }
}

$Full_Stack_obj = new Full_Stack("Node.js", "Java", "MySQL");

$Full_Stack_array = (array) $Full_Stack_obj;
var_dump($Full_Stack_array);

$Full_Stack_Values = array_values($Full_Stack_array);

for ($i=0 ; $i<count($Full_Stack_Values) ; $i++){
  echo $Full_Stack_Values[ $i] ."\n";
}

echo "\n" . $Full_Stack_obj->message1();
echo "\n" . Full_Stack::message2("React.js","Python","ORACLE");
?> 
</pre>

</body>
</html>
