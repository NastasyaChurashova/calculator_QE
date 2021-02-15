<?php
$filename = "Calculator_QE: ax^2+ bx +c = 0";
echo $filename;
echo '';
?>

<form action="" style="" method="get">
    <label>a: </label>
    <input type="number" name="number-1" value="">
    <label> operation: </label>
    <select name="operator" id="">
        <option value="+" selected>+</option>
    </select>
    <label>b: </label>
        <input type="number" name="number-2" value="">
    <label> operation: </label>
    <select name="operator" id="">
        <option value="+" selected>+</option>
    </select>
    <label>c: </label>
    <input type="number" name="number-3" value="">
    <button type="submit">submit</button>
</form>
<br>
<div id="x1"></div>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php

$a = '';
$b = '';
$c = '';
$x1 = '';
$x2 = '';
$Discriminant = '';

$a = $_GET['number-1'];
$b = $_GET['number-2'];
$c = $_GET['number-3'];
$operator = $_GET['operator'];
$allowed_operations = ['+' => '+'];

/*function isValueInt($value) {
    if ((int) $value > 0 || $value === "0") {
        return true;
    }
    return false;
}


function isDiscriminantValue ($a, $b, $c) {
    $Discriminant = $_GET['number-2']**2 - (4*$_GET['number-1']*$_GET['number-3']);
    return $Discriminant;
}
*/

$Discriminant = $_GET['number-2']**2 - (4*$_GET['number-1']*$_GET['number-3']);

if (array_key_exists('number-1', $_GET) &&
    array_key_exists('number-2', $_GET) &&
    array_key_exists('number-3', $_GET) && 

    isset($_GET['number-1']) && 
    isset($_GET['number-2']) && 
    isset($_GET['number-3']))  {
        
        if ($Discriminant === 0 && $a != 0){           
            echo 'x=' . -$b / (2 * $a);
            }
   
        elseif ($Discriminant > 0 && $a != 0) {
            $x1 = (-$b + sqrt($b**2 - 4*$a*$c)) / (2*$a);
            $x2 = (-$b - sqrt($b**2 - 4*$a*$c)) / (2*$a);
            echo  "x1 = $x1  "; 
            echo  "x2 = $x2";
            }

        elseif ($Discriminant < 0 && $a != 0) {
            echo "no roots" ;
            
        }
    }
?> 