<!Doctype html>
<html>
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
        .mt {
            margin-top:50px;
            margin-bottom: 100px;
        }
        form{
            background-color: white;

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
        <div class="row mt">
            <div class="col-xs-8 col-sm-6 col-md-5 col-lg-4 col-xs-offset-2 col-sm-offset-3 col-md-offset-3 col-lg-offset-4 mt">
                <div class="panel">
                    <div class="panel-heading panel-default ">
                        <h4 class="center">SIGN UP</h4>
                    </div>
                    <div class="panel-body">

                        <form method="post" action="signUpProcess.php">
                            <div class="form-group">
                                <label for="email">Name:</label>
                                <input type="text" class="form-control" name="name" pattern="[a-zA-Z- ]{1,}" title="only allow letters and white space "  placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Gmail required @ symbol and . part" name="email" placeholder="Enter Valid Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" pattern=".{8,}" title="Password required Minimum 8 Character" name="password" placeholder="Password(Minimum 8 Character)">
                            </div>

                            <button type="submit" class="btn color btn-block" name="signbtn">Submit</button>
                        </form>

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

