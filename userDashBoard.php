<?php
require "connection.php";
 if(isset($_SESSION['id'])){
?>
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
            <div class="col-xs-8 col-sm-6 col-md-5 col-lg-8 col-xs-offset-2 col-sm-offset-3 col-md-offset-3 col-lg-offset-2 mt">
                <div class="panel">
                    <div class="panel-heading panel-default ">
                        <?php
                           
                             $id=$_SESSION['id'];
                            $query="SELECT * FROM logindata where id='$id'";
                            $result=mysqli_query($conn,$query);
                            if(mysqli_num_rows($result)>0) {
                                $row = mysqli_fetch_assoc($result);
                                $name=$row['name'];
                            }
                           
                            
                        ?>
 
                        <h4 class="center">HELLO <?php echo $name;?></h4>
                        
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
<?php


}else{
    
  echo("<script>alert('You must login to access DashBoard')</script>");
  echo("<script>location.href='index.php'</script>");  
}
    


?>

