<?php
session_start();
require "connection.php";

if(isset($_POST['signbtn'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));


    if (empty($name) || empty($email) || empty($password) ) {
        echo("<script>alert('All field required')</script>");
        echo("<script>location.href='signUp.php'</script>");
    }else if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
        
       echo("<script>alert('Only letters and white space allowed')</script>");
       
       echo("<script>location.href='signUp.php'</script>");
    
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("<script>alert('Invalid email')</script>");
        echo("<script>location.href='signUp.php'</script>");
    }else if(strlen($password)<8){
        echo("<script>alert('Password length must be greater than 8 character')</script>");
        echo("<script>location.href='signUp.php'</script>");

    }else if(!empty($email)) {

        $user_check = "SELECT * FROM logindata WHERE email='$email'";
        $result = mysqli_query($conn, $user_check);
        if (mysqli_num_rows($result) > 0) {

            echo("<script>alert('Email Id already exist, use another email')</script>");
            echo("<script>location.href='signUp.php'</script>");


        } else {

            $query = "INSERT INTO logindata (name,email,password)VALUES('$name','$email','$password')";
            mysqli_query($conn, $query);
            $_SESSION['id'] = mysqli_insert_id($conn);
            echo("<script>alert('Registration Successful')</script>");
            echo("<script>location.href='userDashBoard.php'</script>");

        }
    }


}



?>