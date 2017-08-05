<?php
session_start();
$_SESSION['selectvar'] = "plans";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plans - BodiedByMiaJ</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
<div id="page">
    <?php include ("header.php"); ?>

    <div id="body">
        <div>
            <h1>Plans and Services</h1>
            <br>
            <h2>Fitness Plans</h2>


            <br>
            <p>

                * 30 Day Custom Nutrition plan: Receive 30 Days of customized meals designed to support your specific
                goals........ $25.00
                <br><br>


                * 30 Day Custom Fitness plan: Receive a 30 day workout plan designed to support your specific body
                goals.
                Lose weight AND burn fat, in just 30 minutes a day!........ $25.00
                <br><br>

                * Mind + Body Detox plans: Receive 5 step by step Detox program options designed to prepare your mind
                for
                healthier living, give you a kick start and to help you get rid of unhealthy substances in your
                body........ $30.00
                <br><br>

                * Complete Meal Plan Kit: Receive 30 Days of customized meals, 5 Detox plans, a customized 30 day
                fitness
                plan, “how to meal prep” instructions , Health tips , list of healthy foods to mix and match your own
                meals and portion control guidance........... $100.00

            </p>


            <h2>Services</h2>

            <p>

                * Consultations: Consultations consist of a review your medical history, lifestyle, diet, stress relief
                mechanisms, and exercise habits, as well as your wellness goals, expectations, and level of commitment
                to achieving your goals............... Free
                <br><br>

                * One-on-one Personal Training sessions are built around your schedule, pace and goals. During PT
                sessions, we will work together to design individual programs tailored to your needs. One 30 Day
                Nutrition Plan is included............... $50.00 for two sessions per week. No long term commitment!
            </p>
            <h3>MiaJ</h3>
        </div>
    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>
