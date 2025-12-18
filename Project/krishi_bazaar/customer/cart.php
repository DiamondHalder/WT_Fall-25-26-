

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
            <a href="browse_products.php">Browse Products</a>
            <a href="my_orders.php">My Orders</a>
            <a href="cart.php">Cart</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="content">
            <h2>My Cart</h2><br>
           <?php 
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST['remove'])){
                $product_id = $_POST['product_id'];
                echo "<p style='color:red; margin:8px;'>Product ID $product_id removed from cart.</p>";

            }

             if(isset($_POST['update_qty'])){
                $qty = $_POST['quantity'];
                echo "<p style='color:white; margin:8px;'>Quantity updated to $qty.</p>";

            }
           }
           ?>

           <table>
             <tr>               
                <th>Product</td>
                <th>Price</td>
                <th>Quantity </td>
                <th>Subtotal</td>
                <th>Action</td>
             </tr>
             <tr>
                <td>501</td>
                <td>Rice</td>
                <td>5 kg</td>
                <td>৳250</td>
                <td>Pending</td>
                <td>
                 <form method="post">
                    <input type="hidden" name="order_id" value="501">
                    <input type="submit" name="cancel_order" value="Cancel">
                 </form>
                </td>
             </tr>

             <tr>
                <td>502</td>
                <td>Potato</td>
                <td>10 kg</td>
                <td>৳300</td>
                <td>Confirmed</td>
                <td>
                    <em>Processing</em>
                </td>
             </tr>

             <tr>
                <td>503</td>
                <td>Onion</td>
                <td>3 kg</td>
                <td>৳180</td>
                <td>Delivered</td>
                <td>
                    <em>Completed</em>
                </td>
             </tr>
             
           </table>
            
           
            

        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>