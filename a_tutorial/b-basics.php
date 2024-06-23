<?php
  // Comment
  # Comment
  /*
   * Coment
  */

  // VARIABLE RULES
  # Variables starts with dollar sign
  # Variables must start with a letter or _ cant start with numbers
  # Can only contain alphanumerics and underscores
  # Are case-sensitive
  
  $a = 1;
  $b = 'String';

  // VARIABLE SCOPES
  # Local Scope

  $c = 2; // global
  function myTest() {
    echo "Variable c = $c \n"; // Error because no variable is is Defined in that scope
  }
  // myTest();
  echo "Variable c = $c \n";
  
  function MyTest2() {
    $c = 3;
    echo "Variable c = $c \n";
  }
  MyTest2();



  # Global Scope

  $d = 4; // global

  function myTest3() {
    global $d; // Acessing global variable
    echo "Variable d = $d \n";
  }
  myTest3();

  $e = 5;
  function myTest4() {
    // global $e = 6; // Cant redefine
    $e = 6; // But Can use local scope 
    echo "Variable e = $e \n";
  }
  myTest4();

  # The globals variables are stored in an aray called $GLOBALS and the index is the name of the variable
  # That can be used to update a global value

  /* $f = 7;
  function myTest5() {
    $GLOBALS['f'] = 8; // Update global variable
    echo "Variable f = $f \n";
  }
  myTest5();
  */

  
  # Static 
  # Normally when a function is executed de variables are cleanned from memory
  # If it's needed for future computations can be declared as static

  function myTest8() {
    static $g = 9;
    echo "Variable g = $g \n";
    $g++;
  }

  mytest8();
  mytest8();
  mytest8();



  // CONSTANTS
  # The value can't be changed during the script
  # Are automatically global across entire script
  # Are defined with define function or const prefix, 
  #the difference is define can declare a const inside a block, like a function or if statement
  # Not $ before the name
  
  const CONSTANTE1 = "CONSTANTE 1";
        // (nome, valor)
  define("CONSTANTE2", "CONSTANTE 2");

  function myConstante() {
    echo CONSTANTE1 . "\n";
    echo CONSTANTE2 . "\n";
  }

  myConstante();

  
  // PRINT VALUES
  # echo output data without an return value
  # print returns 1, so can be used in expressions
  $data = "information";
  echo "One parameter \n";
  echo "echo ", "accepts ", "multiple ", "parameters \n";
  echo "Acessing data, data = $data \n";

  print "Print only accepts one parameter \n";
  print "Accessing data, data = " . $data . "\n"; 
  
  echo 'When using single quotes variables has to be accessed by dots like ';
  echo '$data = ' . $data . ' ';
  echo("\n");


  // DATA TYPES
  # Any data can be getted using var_dump();
  $h = 'h';
  var_dump($h);

  $string = 'String';
  $integer = 1;
  $float = 1.1;
  $boolean = true;
  $null = null; //Can be used to initialize an empty variable
  $array = array(1, 2, 3, 'String', true);
  class Car {
    private $color;
    private $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function show() {
      return "\nThis is a $this->color $this->model car!";
    }
  }
  $object = new Car("Pearl", "Fiat");
  var_dump($object);
  echo $object->show();
  echo "\n";

  # Casting
  $i = 5;
  $i = (string) $i;
  var_dump($i);


// Strings
$j = "String Exemple!";
echo strlen($j) . "\n";
echo str_word_count($j) . "\n";
echo strtoupper($j) . "\n";
echo str_replace("Exemple", "2", $j) . "\n";

// Number Casting
$k = 1234.5;
$int_cast = (int)$k;
echo $int_cast . " " . var_dump(is_int($int_cast));

echo "\n";

$l = "678.9";
$int_cast = (int)$l . " " . var_dump(is_int($int_cast));
echo $int_cast;

// MATH
echo "\n";
echo(pi());
echo "\n";
echo(max(0, 12, 25, 3, 19));
echo "\n";


// Foreach
# When looping in an array with foreach, every modification will not affect the 
# original one unless & is used

$colors = array("red", "green", "blue", "yellow", "cyan", "magenta");

foreach ($colors as $color) {
  if ($color == "yellow") $color = "orange";
}

var_dump($colors);
echo("\n");

foreach ($colors as &$color) {
  if ($color == "yellow") $color = "orange";
}

var_dump($colors);



// FUNCTIONS - Arguments by reference
# The orignal variable passed as an argument will be change as the argument itself

function argByRef(&$arg) {
  $arg += 2;
}

$var = 1;
argByRef($var);
echo "Variable new value = " . $var . "\n";

#rest operator
function variableNumbers(...$args) {
  $sum = 0;
  foreach($args as $value) { 
    $sum += $value;
  }
  return $sum;
}

echo variableNumbers(1, 2, 3, 4, 5) . "\n";


?>

