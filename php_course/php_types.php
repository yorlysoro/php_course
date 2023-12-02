<?php
$a_bool = true;   // a bool
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an int

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);

// If $a_bool is a string, print it out
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>

<?php
echo "Booleans </br>";
var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
?>

<?php
echo "Integers Literal </br>";
$a = 1234; // decimal number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0o123; // octal number (as of PHP 8.1.0)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = 1_234_567; // decimal number (as of PHP 7.4.0)

echo "Integer 32 Bits </br>";

$large_number = 2147483647;
var_dump($large_number);                     // int(2147483647)

$large_number = 2147483648;
var_dump($large_number);                     // float(2147483648)

$million = 1000000;
$large_number =  50000 * $million;
var_dump($large_number);

echo "Integer 64 Bits </br>";

$large_number = 9223372036854775807;
var_dump($large_number);                     // int(9223372036854775807)

$large_number = 9223372036854775808;
var_dump($large_number);                     // float(9.2233720368548E+18)

$million = 1000000;
$large_number =  50000000000000 * $million;
var_dump($large_number);                     // float(5.0E+19)

var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)

function foo($value): int {
    return $value; 
  }
  
  var_dump(foo(8.1)); // "Deprecated: Implicit conversion from float 8.1 to int loses precision" as of PHP 8.1.0
  var_dump(foo(8.1)); // 8 prior to PHP 8.1.0
  var_dump(foo(8.0)); // 8 in both cases
  
  var_dump((int)8.1); // 8 in both cases
  var_dump(intval(8.1)); // 8 in both cases

  echo (int) ( (0.1+0.7) * 10 ) . "</br>"; // echoes 7!

  echo "Floating point numbers </br>";

    $a = 1.234; 
    $b = 1.2e3; 
    $c = 7E-10;
    $d = 1_234.567; // as of PHP 7.4.0

    $a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if(abs($a-$b) < $epsilon) {
    echo "true </br> </br>";
}

echo "Strings </br>";

echo 'this is a simple string </br>';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do </br>';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back" </br>';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*? </br>';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*? </br>';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline</br>';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either</br>';

// no indentation
echo <<<END
      a
     b
    c
\n
END;

// 4 spaces of indentation
echo <<<END
      a
     b
    c
    END;

// Show all errors.
error_reporting(E_ALL);

class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// This works; outputs: I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";

// This works too; outputs: I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n";

echo "</br></br> Numeric strings </br>";
?>