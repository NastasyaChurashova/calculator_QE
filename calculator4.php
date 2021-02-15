<form action="" style="" method="get">
    <label>number1: </label>
    <input type="number" name="number-1" value="">
    <label> operation: </label>
    <select name="operator" id="">
        <option value="+" selected>+</option>
        <option value="-" selected>-</option>
    </select>
    <label>number2: </label>
        <input type="number" name="number-2" value="">
    <label> operation: </label>
    <select name="operator" id="">
        <option value="+" selected>+</option>
        <option value="-" selected>-</option>
    </select>
    <input type="number" name="number-3" value="">
    <button type="submit">submit</button>
</form>
<br>
<div id="x"></div>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php
$filename = "Calculator_QE";
echo $filename;

$a = '';
$b = '';
$c = '';

$a = $_GET['number-1'];
$b = $_GET['number-2'];
$c = $_GET['number-3'];
$operator = $_GET['operator']; 

if (array_key_exists('number-1', $_GET) &&
    array_key_exists('number-2', $_GET) &&
    array_key_exists('number-3', $_GET)) {

    if (isValueInt($a) &&
        isValueInt($b) &&
        isValueInt($c) &&
        array_key_exists($operator, $x)
    ) {
        
        if ($a > 0 || $a < 0) {
            function EquationValue ($a, $b, $c) {
                $x = $a + $b;
                return $x;
            }
            echo  '$x';
        }

    }
}
       
?>