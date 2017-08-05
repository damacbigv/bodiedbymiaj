<?php
session_start();
$_SESSION['selectvar'] = "archive";
if(isset($_SESSION['arrData'])) $arr_Data=$_SESSION['arrData'];
?>

<html>
<head>
    <meta http-equiv="refresh" content="1; url=admin.php"/>
</head>


<body>

<?php require 'helper_lib.php';?>

<?php
//echo 'Current PHP version: ' . phpversion();
echo 'Processing............';
?>

<?php

if(!empty($_POST['customer'])) {
    foreach($_POST['customer'] as $check) {
        //echo $check;
        $arr_Data[$check]['Archived'] = "Yes";
    }
}

//print_r ($arr_Data);

$myFile = "data.json";


try {

    //Convert updated array to JSON
    $jsondata = json_encode($arr_Data);
    $jsondata = indent($jsondata);
    //echo $jsondata;
    //write json data into data.json file
    if (file_put_contents($myFile, $jsondata)) {
    ?>

        <script type=text/javascript>
            writeToFirebase(getFirebaseConfig(), "Customers", <?php echo $jsondata; ?>);
        </script>


    <?php

        //echo 'Data successfully saved';
        //header("Location: admin.php");
        exit; // Location header is set, pointless to send HTML, stop the script
    } else
        echo "error";

} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}


?>
</body>
</html>