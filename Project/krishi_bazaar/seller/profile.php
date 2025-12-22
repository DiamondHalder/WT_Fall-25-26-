<?php 
$seller=[
    'name'=>'Sagor',
    'email'=>'Sagor@gmail.com',
    'phone'=>'123452341234',
    'shop_name'=>'Sagor shop',
    'address'=>'Barishal',
    
];

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update_profile'])){
    $seller['name']=$_POST['name'];
    $seller['email']=$_POST['email'];
    $seller['phone']=$_POST['phone'];
    $seller['shop_name']=$_POST['shop_name'];
    $seller['address']=$_POST['address'];

    $message = "Profile updated successfully";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("../includes/head.php"); ?>
    </head>
    <body>
             <?php include("../includes/header.php"); ?>

             
    </body>
</html>