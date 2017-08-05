<?php
session_start();
$_SESSION['selectvar'] = "contact";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact - BodiedByMiaJ</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
<div id="page">
    <?php include ("header.php"); ?>
    <div id="body" class="contact">
        <div>
            <h1>Contact us</h1>
            <br>
            <h2>Email</h2>
            <a href="mailto:BodiedByMiaJ@gmail.com">BodiedByMiaJ@gmail.com</a>
        </div>
    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>
