<?php
/**
 * Created by PhpStorm.
 * User: volliver
 * Date: 6/25/17
 * Time: 7:45 AM
 */

session_start();

if (isset($_POST['fireObject'])) $php_var = $_POST['fireObject'];
else $php_var = "<br />js_var is not set!";

echo $php_var;
$_SESSION["try_again"]=$php_var;

?>




