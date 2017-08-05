<?php
/**
 * Created by PhpStorm.
 * User: volliver
 * Date: 6/25/17
 * Time: 7:45 AM
 */


session_start();

$email_login = $_POST['txtLogin'];
$mypassword = $_POST['txtPass'];

?>

<html>
<head>
</head>
<body>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php require 'helper_lib.php'; ?>

<script type="text/javascript">

    $(document).ready(function () {
        var ref = getFirebaseDBref(getFirebaseConfig(), "Admin_Users");

        firebase.auth().onAuthStateChanged(function (user) {
            if (user) {

                ref.on("value", gotData, errData);
                function gotData(data) {

                    var myJSONText = JSON.stringify(data.val());
                    var users = JSON.parse(myJSONText);

                    for (i = 0; i < users.length; i++) {
                        var email_var = String(users[i]['email']);
                        var pass_var = String(users[i]['password']);

                        if ((email_var ==<?php echo "\"" . $email_login . "\""?>) && (pass_var == <?php echo "\"" . $mypassword . "\""?>)) {
                            $.ajax({
                                type: "POST",
                                url: "process_login_valid.php",
                                data: ({fireObject: email_var}),
                                success: function (data) {
                                    window.location.replace("admin.php");
                                }
                            });
                        }
                    }

                    $.ajax({
                        type: "POST",
                        url: "process_login_invalid.php",
                        data: ({fireObject: true}),
                        success: function (data) {
                            window.location.replace("admin.php");
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

</script>

</body>

</html>
