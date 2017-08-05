<?php
session_start();
$_SESSION['selectvar'] = "index";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BodiedByMiaJ</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <script src="js/mobile.js" type="text/javascript"></script>
</head>
    <body>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="body" class="home">
                <div class="header">
                    <div>
                        <pre style="text-align: center; text-shadow: 0px 0px 10px #ebebeb;font-weight:bold; font-size: 3.5vw;">Healthy Mind | Healthy Body</br></pre>
        
                        <img src="images/runner 3.png" alt="">
                    </div>
                </div>
                <div class="body">
                    <div>
                        <h2>Hours</h2>
                        <p>
                            Monday-Friday 6:30 pm - 8:30 pm
                            <br>Saturday-Sunday 7:00 am - 7:00 pm
                        </p>
                        <a href="about.php" class="more">Read More</a>
                    </div>
                </div>
            </div>
        
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
