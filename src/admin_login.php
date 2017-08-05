<?php
session_start();
$_SESSION['selectvar'] = "admin";
//$_SESSION["try_again"] = false;



if(isset($_SESSION["user_ID"]))
{
    header("location:admin.php");
}

if(!isset($_SESSION["try_again"]))
{
    $_SESSION["try_again"] = false;
}


?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin - BodiedByMiaJ</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <script src="js/mobile.js" type="text/javascript"></script>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src=https://www.gstatic.com/firebasejs/4.1.2/firebase.js></script>


    <style type="text/css">
        .formfield * {
            vertical-align: middle;
        }

        .form-style-3{
            max-width: 450px;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }
        .form-style-3 label{
            display:block;
            margin-bottom: 10px;
        }
        .form-style-3 label > span{
            float: left;
            width: 100px;
            color: #F072A9;
            font-weight: bold;
            font-size: 13px;
            text-shadow: 1px 1px 1px #fff;
        }
        .form-style-3 fieldset{
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            margin: 0px 0px 10px 0px;
            border: 1px solid #FFD2D2;
            padding: 20px;
            background: #FFF4F4;
            box-shadow: inset 0px 0px 15px #FFE5E5;
            -moz-box-shadow: inset 0px 0px 15px #FFE5E5;
            -webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
        }
        .form-style-3 fieldset legend{
            color: #FFA0C9;
            border-top: 1px solid #FFD2D2;
            border-left: 1px solid #FFD2D2;
            border-right: 1px solid #FFD2D2;
            border-radius: 5px 5px 0px 0px;
            -webkit-border-radius: 5px 5px 0px 0px;
            -moz-border-radius: 5px 5px 0px 0px;
            background: #FFF4F4;
            padding: 0px 8px 3px 8px;
            box-shadow: -0px -1px 2px #F1F1F1;
            -moz-box-shadow:-0px -1px 2px #F1F1F1;
            -webkit-box-shadow:-0px -1px 2px #F1F1F1;
            font-weight: normal;
            font-size: 12px;
        }
        .form-style-3 textarea{
            width:250px;
            height:100px;
        }
        .form-style-3 input[type=text],
        .form-style-3 input[type=date],
        .form-style-3 input[type=datetime],
        .form-style-3 input[type=number],
        .form-style-3 input[type=search],
        .form-style-3 input[type=time],
        .form-style-3 input[type=url],
        .form-style-3 input[type=email],
        .form-style-3 select,
        .form-style-3 textarea{
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid #FFC2DC;
            outline: none;
        <!--color: #F072A9;-->
            padding: 5px 8px 5px 8px;
            box-shadow: inset 1px 1px 4px #FFD5E7;
            -moz-box-shadow: inset 1px 1px 4px #FFD5E7;
            -webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
            background: #FFEFF6;
            width:50%;
        }
        .form-style-3  input[type=submit],
        .form-style-3  input[type=button]{
            background: #EB3B88;
            border: 1px solid #C94A81;
            padding: 5px 15px 5px 15px;
            color: #FFCBE2;
            box-shadow: inset -1px -1px 3px #FF62A7;
            -moz-box-shadow: inset -1px -1px 3px #FF62A7;
            -webkit-box-shadow: inset -1px -1px 3px #FF62A7;
            border-radius: 3px;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            font-weight: bold;
        }
        .required{
            color:red;
            font-weight:normal;
        }
    </style>

</head>
<body>
<?php require 'helper_lib.php';?>






<div id="page">
    <?php include("header.php"); ?>

    <div id="body">
        <div class="form-style-3">
            <h1>Administration</h1>
            <br><br>

            <?php
            if($_SESSION["try_again"]==true)
            {
                echo "<p style=\"color:orange\">**** Failed Login, Please Try Again ****</p>";
            }
            ?>

            <form name="frmLogin" method="post" action="process_login.php">

                        <p class="formfield">
                            <label for="txtLogin">Email Address *</label>
                            <input type="text" name="txtLogin" id="txtLogin" class="input-field">
                        </p>

                        <p class="formfield">
                            <label for="txtPass">Password *</label>
                            <input type="text" name="txtPass" id="txtPass" class="input-field">
                        </p>
                <p><input type="submit" value="LOGIN" class="input-field"></p>


            </form>

        </div>
    </div>

    <?php include("footer.php"); ?>

</div>

</body>


</html>
