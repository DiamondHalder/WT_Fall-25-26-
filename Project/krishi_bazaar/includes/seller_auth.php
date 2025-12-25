<?php
if(session_status()===PHP_SESSION_NONE){
    session_start();
}




if(!isset($_SESSION['user_role']) || $_SESSION['user_role'] !=='seller' ){
    header("Location: ../auth/login.php");
    exit();
}
?>