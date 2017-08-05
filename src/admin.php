<?php
session_start();
$_SESSION['selectvar'] = "admin";

if(!isset($_SESSION["user_ID"]))
{
    header("location:admin_login.php");
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


    <style>
        #customers {
            border-collapse: collapse;
            width: 100%;
            font-size: 80%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:nth-child(odd) {
            background-color: #deeff2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

        .ui-helper-center {
            text-align: center;
        }

        #customers2 {
            border-collapse: collapse;
            width: 100%;
            font-size: 80%;
        }

        #customers2 td, #customers2 th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers2 tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers2 tr:nth-child(odd) {
            background-color: #deeff2;
        }

        #customers2 tr:hover {
            background-color: #ddd;
        }

        #customers2 th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

        #customers2 td:nth-of-type(9) {
            display: none;
        }

        .ui-helper-center {
            text-align: center;
        }





        /* Style the tab */
        .tab {

            padding-top: 0px !important;
            overflow: hidden;
            background: none !important;

        }

        /* Style the buttons inside the tab */
        .tab button {
            /* background-color: inherit; */
            float: left;
            border: 1px solid green;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            background: none !important;
            padding-top: 10px !important;

        }







        /*
        Max width before this PARTICULAR table gets nasty
        This query will take effect for any screen smaller than 760px
        and also iPads specifically.
        */
        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            /* Force table to not be like tables anymore */
            table, thead, tbody, th, td, tr {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            /* thead tr { */
            th {
                /*
                position: absolute;
                top: -9999px;
                left: -9999px;
                */
                display: none;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                /* Now like a table header */
                /* position: fixed; */
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
            }

            /*
            Label the data
            */
            #customers td:nth-of-type(1):before {
                content: "Date of Request:";
            }

            #customers td:nth-of-type(2):before {
                content: "First Name:";
            }

            #customers td:nth-of-type(3):before {
                content: "Last Name:";
            }

            #customers td:nth-of-type(4):before {
                content: "Email Address:";
            }

            #customers td:nth-of-type(5):before {
                content: "Phone Number";
            }

            #customers td:nth-of-type(6):before {
                content: "Plan or Service:";
            }

            #customers td:nth-of-type(7):before {
                content: "Comments:";
            }

            #customers td:nth-of-type(8):before {
                content: "Archived:";
            }

            #customers2 td:nth-of-type(1):before {
                content: "Date of Request:";
            }

            #customers2 td:nth-of-type(2):before {
                content: "First Name:";
            }

            #customers2 td:nth-of-type(3):before {
                content: "Last Name:";
            }

            #customers2 td:nth-of-type(4):before {
                content: "Email Address:";
            }

            #customers2 td:nth-of-type(5):before {
                content: "Phone Number:";
            }

            #customers2 td:nth-of-type(6):before {
                content: "Plan or Service:";
            }

            #customers2 td:nth-of-type(7):before {
                content: "Comments:";
            }

            #customers2 td:nth-of-type(8):before {
                content: "Archived:";
            }

            #customers2 td:nth-of-type(9):before {
                content: "Original ID:";
            }

            #customers2 td:nth-of-type(10):before {
                content: "Mark:";
            }
        }






    </style>

</head>
<body>
<?php require 'helper_lib.php';?>

<?php


$myFile = "data.json";
$arr_data = array(); // create empty array

//Get data from existing json file
$jsondata = file_get_contents($myFile);

if ($jsondata <> null) {
    $arr_data = json_decode($jsondata, true);
}

//if(isset($_SESSION['arrData'])) $var=$_SESSION['var'];
//$_SESSION['arrData'] = $arr_data;
//print_r($_SESSION['arrData'] );
?>


<div id="page">
    <?php include("header.php"); ?>





    <div id="body">



        <div>
            <h1>Administration</h1>
            <br><br>

            <div class="tab">
                <button class="tablinks" onclick="openSetting(event, 'tbRequest')" id="defaultOpen">Manage Customer Requests</button>
                <button class="tablinks" onclick="openSetting(event, 'tbServices')">Manage Offered Services</button>
            </div>





            <div id="tbRequest" class="tabcontent">
                <form name="frmComplete" style="margin-bottom: 0px;" method="post" action="process_Complete.php">
                    <select name="lstCompleted" id="lstCompleted" style="max-width:90%; margin-top: 10px; margin-bottom: 0px;" class="" onchange="form.submit()">

                        <?php if ($_SESSION['selComplete'] == "no"){ ?>
                            <option value="no" selected>In Progress</option>
                            <option value="yes">All</option>
                        <?php } else if(!isset($_SESSION['selComplete'])) { ?>

                            <option value="no" selected>In Progress</option>
                            <option value="yes" >All</option>

                        <?php } else if($_SESSION['selComplete'] == "yes"){  ?>
                            <option value="no">In Progress</option>
                            <option value="yes" selected>All</option>
                        <?php } ?>


                    </select>
                </form>

                <form name="frmAdmin" method="post" action="archive.php">
                    <pre id="data_table" style=" margin-top: 0px; margin-bottom: 0px;">

                    </pre>
                </form>

                <form action="logout.php">
                    <input type="submit" value="Click to Logout" style="float: right;"/>
                </form>
            </div>

            <div id="tbServices" class="tabcontent">
                <h3>Manage Offered Services</h3>
                <p>TO DO .....</p>
            </div>

        </div>
    </div>

    <?php include("footer.php"); ?>

</div>

</body>

<script type="text/javascript">

    $(document).ready(function () {
        var ref = getFirebaseDBref(getFirebaseConfig(), "Customers");


        firebase.auth().onAuthStateChanged(function (user) {
            if (user) {

                ref.on("value", gotData, errData);
                function gotData(data) {
                    var customers = data.val();

                    var myJSONText = JSON.stringify(customers);

                    $.ajax({
                        type: "POST",
                        url: "admin_firebase.php",
                        data: ({fireObject: myJSONText}),
                        success: function (data) {
                            $("#data_table").html(data);
                        }
                    });
                }

                function errData(err) {
                    console.log('Error!');
                    console.log(err);
                }

            }
            else {
                firebase.auth().signInAnonymously();
            }
            console.log(user);

        });
    });






    function openSetting(evt, settingName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(settingName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();


</script>


</html>
