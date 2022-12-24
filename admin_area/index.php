<?php 
    session_start();
    include("includes/db.php");
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        $admin_SESSION = $_SESSION['admin_email'];

        $get_admin = "select *  from admins where admin_email='$admin_SESSION'";
        $run_admin = mysqli_query($con,$get_admin);
        $row_admin = mysqli_fetch_array($run_admin);
        $admin_id = $row_admin['admin_id'];
        $admin_name = $row_admin['admin_name'];

        $get_product_category = "select * from products_categories";
        $run_product_category = mysqli_query($con,$get_product_category);
        $count_product_category = mysqli_num_rows($run_product_category);

        $get_products = "select * from products";
        $run_products = mysqli_query($con,$get_products);
        $count_products = mysqli_num_rows($run_products);

        $get_customers = "select * from customers";
        $run_customers = mysqli_query($con,$get_customers);
        $count_customers = mysqli_num_rows($run_customers);

        $get_orders = "select * from pending_orders";
        $run_orders = mysqli_query($con,$get_orders);
        $count_orders = mysqli_num_rows($run_orders);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="admin_images/admin.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/fedd93fc11.js" crossorigin="anonymous"></script>
</head>
<body> 
<?php include('includes/navbar.php'); ?>
    
    <div class="row">
        <!-- sidebar start -->
        <div class="col-md-2">
            <?php include('includes/sidenav.php'); ?>
        </div>
        <!-- sidebar end -->

        <!-- dashboard start -->
        <div class="col-md-10">
            <?php 
                if(isset($_GET['dashboard'])){
                    include("dashboard.php");
                }
                if(isset($_GET['insert_product'])){
                    include("insert_product.php");
                }
                if(isset($_GET['view_products'])){
                    include("view_products.php");
                }
                if(isset($_GET['edit_product'])){
                    include("edit_product.php");
                }
                if(isset($_GET['delete_product'])){
                    include("delete_product.php");
                }
                if(isset($_GET['view_customers'])){
                    include("view_customers.php");
                }
                if(isset($_GET['delete_customer'])){
                    include("delete_customer.php");
                }
                if(isset($_GET['insert_category'])){
                    include("insert_category.php");
                }
                if(isset($_GET['view_categories'])){
                    include("view_categories.php");
                }
                if(isset($_GET['delete_category'])){
                    include("delete_category.php");
                }
                if(isset($_GET['insert_product_category'])){
                    include("insert_product_category.php");
                }
                if(isset($_GET['view_product_categories'])){
                    include("view_product_categories.php");
                }
                if(isset($_GET['delete_product_category'])){
                    include("delete_product_category.php");
                }
                if(isset($_GET['view_orders'])){
                    include("view_orders.php");
                }
                if(isset($_GET['delete_order'])){
                    include("delete_order.php");
                }
                if(isset($_GET['view_payments'])){
                    include("view_payments.php");
                }
        ?> 
        </div>
        <!-- dashboard end -->
    </div>
<?php include('includes/footer.php'); ?>
<?php } ?>