# <?php
# include("../includes/auth_check.php");
# ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Orders</title>
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <?php include("../includes/header.php"); ?>

        <div class="container">
            <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="manage_users.php">Manage Users</a>
            <a href="orders.php">Orders</a>
            <a href="approve_products.php">Approve Products</a>
            <a href="activity_log.php">Activity</a>
            </div>

            <div class="content">
                <h2>Manage Orders</h2><br>

                <?php
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        if(isset($_POST["confirm"])){
                            $order_id = $_POST["order_id"];
                            echo "<p style='color:green;'>Order Id $order_id had been confirmed (UI only).</p>";
                        }

                        if(isset($_POST["cancle"])){
                            $order_id = $_POST["order_id"];
                            echo "<p style='color:red;'>Order Id $order_id had been cancelled (UI only).</p>";
                        }

                        
                    }
                ?>