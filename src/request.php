<?php
session_start();
$_SESSION['selectvar'] = "request";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request - BodiedByMiaJ</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">









    <script src="js/mobile.js" type="text/javascript"></script>
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
<div id="page">
    <?php include ("header.php"); ?>

    <div id="body">
        
        <div class="form-style-3">
            <h1>Request Form</h1>
            <br>
            <form name="frmRequest" method="post" action="process.php">
              <p>
                <label for="lstPlans">Plans and Services * </label>
                <select name="lstPlans" id="lstPlans" style="max-width:90%;" class="select-field">
                    <option></option>
                    <option>Plan - 30 Day Custom Nutrition ... $25.00</option>
                    <option>Plan - 30 Day Custom Fitness ... $25.00</option>
                    <option>Plan - 4 week Vegetarian ... $30.00</option>
                    <option>Plan - Complete Meal Plan Kit ... $100.00</option>
                    <option>Service - Consultations ... Free</option>
                    <option>Serivce - One-on-one Personal Training Sessions ... $50 2x Sessions per Wk</option>
                    <option>Custom Request ... N/A</option>
                </select>
              </p>
                <p class="formfield">
                    <label for="txtComments">Additional Comments</label>
                    <textarea name="txtComments" id="txtComments" cols="45" rows="5" class="textarea-field"></textarea>
                </p>
                <p class="formfield">&nbsp;</p>


                <p class="formfield">Contact Information:</p>
                <p class="formfield">
                    <label for="txtFirstName">First Name</label>
                    <input type="text" name="txtFirstName" id="txtFirstName" class="input-field">
                </p>
                <p class="formfield">
                    <label for="txtLastName">Last Name *</label>
                    <input type="text" name="txtLastName" id="txtLastName" class="input-field">
                </p>
                <p class="formfield">
                    <label for="txtEmail">Email Address *</label>
                    <input type="text" name="txtEmail" id="txtEmail" class="input-field">
                </p>
                <p class="formfield">
                    <label for="txtPhone">Phone # *</label>
                    <input type="text" name="txtPhone" id="txtPhone" class="input-field">
                </p>
                <p>
                    <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" class="input-field">
                </p>




            </form>
            
            
            
        </div>
    </div>
    <?php include("footer.php"); ?>
</div>




</body>
</html>
