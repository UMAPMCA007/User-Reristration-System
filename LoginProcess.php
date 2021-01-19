<?php
session_start();
require "connection.php";

if(isset($_POST['logbtn'])){

    $email             = mysqli_real_escape_string($conn,$_POST['email']);
    $password          = md5(mysqli_real_escape_string($conn,$_POST['password']));

    if( empty($email) || empty($password)  ){
        echo("<script>alert('All field required')</script>");
        echo("<script>location.href='Login.php'</script>");
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo("<script>alert('Invalid email')</script>");
        echo("<script>location.href='Login.php'</script>");

    }else{

        $sql1 = "SELECT * FROM logindata WHERE email='$email' AND password='$password'";
        $result1 = mysqli_query($conn,$sql1);
        
        if(mysqli_num_rows($result1)>0) {
            $row = mysqli_fetch_assoc($result1);
            $id = $row['id'];
            $_SESSION['id'] = $id;
            echo("<script>location.href='userDashBoard.php'</script>");
            
        }else{

            echo("<script>alert('username or password is wrong')</script>");
            echo("<script>location.href='Login.php'</script>");
        }
    }





}





?>