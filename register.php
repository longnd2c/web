<?php
include "dp.php";
$name=$_POST["name"];
$username=$_POST["username"];
$password= md5 ($_POST["password"]);
$repassword= md5 ($_POST["repassword"]);
$phone=$_POST["phone"];
$mail=$_POST["mail"];
$address=$_POST["address"];
$trn_date = date("Y-m-d H:i:s");
/*
$cname="/^[A-Z][a-zA-Z]+$/";
$emailValidation="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number="/[0-9]+$/";
*/

if(empty($name)||empty($username)||empty($password)||empty($repassword)||
empty($phone)||empty($mail)||empty($address)){
    echo"
        <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Please Fill All Fields...!</b>
        </div>
    ";
    exit();
}
else{
    if($password != $repassword){
        echo"<div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Password is not same...!</b>
        </div>";
        exit();
    }

    $sql="SELECT Cus_ID FROM tblcustomer WHERE username='$username' LIMIT 1 ";
    $check_query=mysqli_query($con,$sql);
    $count_username=mysqli_num_rows($check_query);
    if($count_username>0){
        echo"<div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Username is already available... Try another Username!</b>
        </div>";
        exit();
    }
    else{
        $sql="INSERT INTO `tblcustomer` (`Cus_ID`, `Username`, `Password`,
         `Cus_Name`, `Cus_Phone`, `Cus_Email`, `Cus_Address`, `Reg_Date`)
        VALUES (NULL, '$username', '$password', '$name', '$phone', 
        '$mail', '$address', '$trn_date')";
        $run_query=mysqli_query($con,$sql);
        if($run_query){
            echo"<div class='alert alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <b>You are Registered successfully!</b>
            </div>";
        }
    }
}
/*
if (!preg_match($cname,$name)) {
    echo"$name is not valid";
    exit();
}
if (!preg_match($emailValidation,$mail)) {
    echo"$mail is not valid";
    exit();
}
*/

?>