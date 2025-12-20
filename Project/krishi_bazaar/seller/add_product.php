
<!DOCTYPE html>
<html>

<head>

    <?php include("../includes/head.php"); ?>

</head>

<body>
    <?php include("../includes/header.php"); ?>

    <div class="container">

        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="add_product.php"></a>
            <a href="my_products.php">My Products</a>
            <a href="orders.php">Orders</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="content">
            <h2>Add New Product</h2><br>

            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name=trim($_POST["name"]);
                $category=trim($_POST["category"]);
                $price=trim($_POST["price"]);
                $quantity=trim($_POST["quantity"]);
                $description=trim($_POST["description"]);

                if($name=="" || $category=="" || $price=="" || $quantity=="" || $description=="" ){
                    echo "<p style='color:red;'>All fields are required.</p>";
                }elseif (!is_numeric($price) || $price<=0){
                    echo "<p style='color:red;'>Enter a valid price.</p>";
                }elseif (!is_numeric($quantity) || $quantity<1){
                    echo "<p style='color:red;'>Enter a valid quantity.</p>";
                }else {
                    echo "<p style='color:green;'>Product added successfully.</p>";
                }
            } 
             ?>


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>