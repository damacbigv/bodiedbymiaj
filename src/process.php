<html>
    <head>
        <meta http-equiv="refresh" content="1; url=success.php"/>
    </head>


    <body>
        <?php require 'helper_lib.php';?>
        <?php
            //echo 'Current PHP version: ' . phpversion();
            echo 'Processing............';
        ?>

        <?php

        ?>

        <?php
            if (isset($_POST['btnSubmit'])) {

                $to = "BodiedByMiaJ@gmail.com, volliver@gmail.com"; // this is your Email address
                //$to = ""; //"volliver@gmail.com"; // this is your Email address
                $from = "email@bodiedbymiaj.com"; // this is the sender's Email address
                $txtFirstName = $_POST['txtFirstName'];
                $txtLastName = $_POST['txtLastName'];
                $lstPlans = $_POST['lstPlans'];
                if ($_POST['txtComments'] <> null)
                    $txtComments = $_POST['txtComments'];
                else
                    $txtComments = "None";
                $txtEmail = $_POST['txtEmail'];
                $txtPhone = $_POST['txtPhone'];


                $subject = "Requested Service";
                $message = $txtFirstName . " " . $txtLastName . " is requesting the following plan or service:" . "\n\n" . $lstPlans . "\n" .
                    "\n\n" . "Customer Information:" . "\n" .
                    $txtFirstName . " " . $txtLastName . "\n" .
                    $txtEmail . "\n" .
                    $txtPhone . "\n" .
                    "\n" . "Additonal Comments:" . "\n" .
                    $txtComments;
                //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['txtComments'];

                $headers = "From:" . $from;
                //$headers2 = "From:" . $to;

                //mail($to, $subject, $message, $headers);

                //mail($from,$message2,$headers2); // sends a copy of the message to the sender
                //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
                // You can also use header('Location: thank_you.php'); to redirect to another page.
            }
        ?>

        <?php
            $myFile = "data.json";
            $arr_data = array(); // create empty array

            try {

                //Get form data
                $formdata = array(
                    'dateOfReq' => date("M d, Y"),
                    'txtFirstName' => $_POST['txtFirstName'],
                    'txtLastName' => $_POST['txtLastName'],
                    'txtEmail' => $_POST['txtEmail'],
                    'txtPhone' => $_POST['txtPhone'],
                    'lstPlans' => $_POST['lstPlans'],
                    'txtComments' => $_POST['txtComments'],
                    'Archived' => "No"
                );

                //Get data from existing json file
                $jsondata = file_get_contents($myFile);

                if ($jsondata == null) {
                    array_push($arr_data, $formdata);
                } else {
                    // converts json data into array
                    $arr_data = json_decode($jsondata, true);

                    // Push user data to array
                    array_push($arr_data, $formdata);
                }

                //Convert updated array to JSON
                $jsondata = json_encode($arr_data);
                $jsondata = indent($jsondata);
                //echo $jsondata;


                //write json data into data.json file
                if (file_put_contents($myFile, $jsondata)) {
            ?>

            <script type=text/javascript>
                writeToFirebase(getFirebaseConfig(), "Customers", <?php echo $jsondata; ?>);
            </script>


            <?php
                    //header("Location: success.php");
                    exit; // Location header is set, pointless to send HTML, stop the script
                } else
                    echo "error";

                } catch (Exception $e) {
                    echo 'Caught exception: ', $e->getMessage(), "\n";
                }
            ?>
    </body>
</html>