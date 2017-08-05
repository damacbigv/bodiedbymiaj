<?php
session_start();

if ($_POST['lstCompleted']=="no")
{
    $_SESSION['selComplete']="no";
}
elseif ($_POST['lstCompleted']=="yes")
{
    $_SESSION['selComplete']="yes";
}

//echo $_SESSION['selComplete'];

header("Location: admin.php");
exit; // Location header is set, pointless to send HTML, stop the script


?>