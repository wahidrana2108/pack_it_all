<?php
    include("includes/db.php");
    include("functions/functions.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Pack It All</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/fedd93fc11.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- temp nav start -->
    <div class="container">
        <div class="d-flex tempNavBg mb-1">
            <div class="welcome mt-auto">
                <h6> <button class="btn btn-success btn-sm justify-content-left mt-2 me-2 ms-3">Welcome</button>4 items
                    in Your Cart | Total Price ৳300</h6>
            </div>
            <nav class="navbar navbar-expand-lg ms-auto">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Register</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">My Account</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Go To Account</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
    <!-- temp nav start -->

    <div class="container">
        <h6 class="bg-secondary font-weight-bolder text-center" style="color: white;">Winter sale 50% Off</h6>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo.png" style="height: 80px;" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item <?php if($active=='Home') echo"activePage"; ?>"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item <?php if($active=='Shop') echo"activePage"; ?>"><a class="nav-link active" aria-current="page" href="shop.php">Shop</a></li>
                        <li class="nav-item <?php if($active=='My Account') echo"activePage"; ?>"><a class="nav-link active" aria-current="page" href="customer/myAccount.php">My Account</a></li>
                        <li class="nav-item <?php if($active=='Shopping Cart') echo"activePage"; ?>"><a class="nav-link active" aria-current="page" href="cart.php">Shopping Cart</a></li>
                        <li class="nav-item <?php if($active=='Contact Us') echo"activePage"; ?>"><a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 ms-auto mb-lg-0">
                        <li class="nav-item">
                            <form class="d-flex mt-1 ms-md-5" role="search">
                                <input class="form-control me-2 .col-md-4" type="search" placeholder="Search in Pack It All" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link active mt-1" aria-current="page" href="cart.php">
                                <button type="button" class="btn position-relative"> <i class="fa-solid fa-cart-arrow-down"> </i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">+9 <span class="visually-hidden">Added to cart</span></span></button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    