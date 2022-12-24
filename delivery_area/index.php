<?php 
    session_start();
    include("includes/db.php");
    if(!isset($_SESSION['rider_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        $rider_SESSION = $_SESSION['rider_email'];

        $get_rider = "select * from delivery_man where rider_email='$rider_SESSION'";
        $run_rider = mysqli_query($con,$get_rider);
        $row_rider = mysqli_fetch_array($run_rider);
        $rider_id = $row_rider['rider_id'];
        $rider_name = $row_rider['rider_name'];
 ?>           

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Panel</title>
    <link rel="icon" type="image/x-icon" href="rider_images/rider_logo.png">
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
                if(isset($_GET['profile'])){
                    include("profile.php");
                }
                if(isset($_GET['view_payments'])){
                    include("view_payments.php");
                }
                if(isset($_GET['update_delivery'])){
                    include("update_delivery.php");
                }
        ?> 
        </div>
        <!-- dashboard end -->
    </div>
<?php include('includes/footer.php'); ?>
<?php } ?>