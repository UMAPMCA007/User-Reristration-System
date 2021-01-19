<!Doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USER REGISTRATION SYSTEM</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        section{
            height: auto !important;
            min-height:100vh;
            background-color: #F7F8FD;
        }
        .mt{
            margin-top: 80px;
            margin-bottom: 200px;
        }
        .center{
            text-align: center;
        }
        .color{
            background-color: #3B887B;
            color: white;
        }
    </style>
</head>
<body>
<?php
include "includes/header.php";
?>

<section>
    <div class="container">
        <div class="row mt"><br>
            <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 col-xs-offset-2 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 ">
                <div class="panel">
                    <div class="panel-heading panel-default">
                        <h4 class="center">LOGIN</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <form action="LoginProcess.php" method="post">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Password:</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn color btn-block" name="logbtn">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class=" panel-footer panel-default">
                        <p><b>Don't have an account?<a href="signUp.php">Click Here to Sign Up</a></b></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<?php
include "includes/footer.php";
?>


</body>
</html>

