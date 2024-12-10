<?php 

require_once "./dbh.inc.php";
// -- add validation file
require_once "./validations.inc.php";

if(isset($_POST["register-btn"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $re_pass = $_POST["re_pass"];

    //Input validation
    if(inputsEmptyRegister($fname, $lname, $email, $pass, $re_pass)){
        header("location: ../index.php?err=empty_inputs");

    }

    else if(nameInvalid($fname, $lname)){
        header("location: ../index.php?err=invalid_name");
    }

    else if(emailInvalid($email)){
        header("location: ../index.php?err=invalid_email");
    } 
    
    else if(passwordInvalid($pass)){
        header("location: ../index.php?err=invalid_password");
    }

    else if(passNotMatch($re_pass)){
        header("location: ../index.php?err=difference_password");
    }

    else if(emailAvailable($conn, $email)){
        header("location: ../index.php?err=available_email");
    }

    else{
        //If all inputs are error free
        registerNewUser($conn, $fname, $lname, $email, $pass, $re_pass);
    }
}

?>
