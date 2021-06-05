<?php
session_start();
include("config1.php");
//echo "eId: ".$_SESSION['eId']."uId: ".$_SESSION['uId'];
    if(isset($_POST['signout'])){
        session_unset();
        session_destroy();
        echo "<script>location.href='welcomepage.html';</script>";
    }
   // $eId = $_SESSION['eId'];

   // if(isset($_POST['watchnow'])){
    //    $result = mysqli_query($conn,"INSERT into history values ('$eId')");
    //}
?>