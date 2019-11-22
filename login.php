<?php
include "dp.php";

session_start();

if(isset($_POST["userLogin"])){
    $username=mysqli_real_escape_string($con,$_POST["username"]);
    $password=md5($_POST["password"]);
    $sql="SELECT * FROM tblcustomer WHERE Username='$username' AND Password='$password'";
    $run_query=mysqli_query($con,$sql);
    $count=mysqli_num_rows($run_query);
    if($count==1){
      $row=mysqli_fetch_array($run_query);
      $_SESSION["uid"]=$row["Cus_ID"];
      $_SESSION["name"]=$row["Cus_Name"];
      echo"truessssssssssssssssdsadsadsadasdsadas";
    }
  }
?>