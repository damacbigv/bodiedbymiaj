<?php
session_start();
$select_var = $_SESSION['selectvar'];



?>

    <div id="header">

        <div id="navigation">
            <a href="index.php" class="logo"><img src="images/logo2.png" alt=""></a>
            <span id="mobile-navigation"></span>

            <ul id="menu">



                <?php if ($select_var == "index"): ?>
                    <li class="selected">
                <?php else: ?>
                    <li>
                <?php endif; ?>
                        <a href="index.php">Home</a>
                    </li>

                <?php if ($select_var == "about"): ?>
                    <li class="selected">
                        <?php else: ?>
                    <li>
                        <?php endif; ?>
                            <a href="about.php">About</a>
                    </li>

                <?php if ($select_var == "plans"): ?>
                    <li class="selected">
                        <?php else: ?>
                    <li>
                        <?php endif; ?>
                            <a href="plans.php">Plans</a>
                    </li>

                <?php if ($select_var == "request"): ?>
                <li class="selected">
                <?php else: ?>
                    <li>
                        <?php endif; ?>
                        <a href="request.php">Request</a>
                    </li>
                
                <?php if ($select_var == "contact"): ?>
                    <li class="selected">
                        <?php else: ?>
                    <li>
                        <?php endif; ?>
                            <a href="contact.php">Contact</a>
                    </li>


                <?php if ($select_var == "admin"): ?>
                <li class="selected">
                    <?php else: ?>
                <li>
                    <?php endif; ?>
                    <a href="admin.php">Admin</a>
                </li>      
                
            </ul>
        </div>
    </div>


<?php
/**
 * Created by PhpStorm.
 * User: volliver
 * Date: 6/4/17
 * Time: 9:19 PM
 */
?>