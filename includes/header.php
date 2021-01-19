<?php

session_start();
require "connection.php";

?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

                    <a  href="index.php" class="navbar-brand" >USER REGISTRATION SYSTEM</a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">

                <?php

                        if(isset($_SESSION['id'])){

                ?>
                        <li><a  href="userDashBoard.php"><span  class="glyphicon glyphicon-info-sign left"></span>DashBoard</a></li>
                        <li><a href="LogOut.php"><span class="glyphicon glyphicon-log-in left"></span> Logout</a></li>
                <?php
                 }else{
                ?>

                            <li><a  href="signUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php

                  }

                ?>



            </ul>
        </div>
    </div>
</nav>