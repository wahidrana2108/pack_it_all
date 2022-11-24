<?php
include("includes/db.php")
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">My Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Go To Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Login</a>
                            </li>
                    </div>
                </div>
            </nav>
        </div>

    </div>
    <!-- temp nav start -->


    <!-- navbar start -->
    <?php
        include("includes/navbar.php");
    ?>
    <!-- navbar end -->


    <!-- banner start -->
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="container row  d-flex justify-content-center align-items-center">
                        <div class="col-6">
                            <h2>Macbook Pro</h2>
                            <p class="gray-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <button type="button" class="btn btn-dark">BUY NOW →</button>

                        </div>
                        <div class="col-6">
                            <?php 
                                $get_slides = "select * from slider LIMIT 0,1";
                                $run_slides = mysqli_query($con,$get_slides);
                                while($row_slides=mysqli_fetch_array($run_slides)){
                                    $slide_name = $row_slides['slide_name'];
                                    $slide_image = $row_slides['slide_image'];                              
                                    echo "                               
                                        <div class='item active'>
                                            <img src='admin_area/slides_images/$slide_image'  class='d-block w-100'>
                                        </div>
                                ";
                             }
                            ?>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="2000">
                    <div class="container row  d-flex justify-content-center align-items-center">
                        <div class="col-6">
                            <h2>Macbook Pro</h2>
                            <p class="gray-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <button type="button" class="btn btn-dark">BUY NOW →</button>

                        </div>
                        <div class="col-6">
                            <?php 
                                $get_slides = "select * from slider LIMIT 1,1";
                                $run_slides = mysqli_query($con,$get_slides);
                                while($row_slides=mysqli_fetch_array($run_slides)){
                                    $slide_name = $row_slides['slide_name'];
                                    $slide_image = $row_slides['slide_image'];                              
                                    echo "                               
                                        <div class='item active'>
                                            <img src='admin_area/slides_images/$slide_image'  class='d-block w-100'>
                                        </div>
                                ";
                             }
                            ?>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container row  d-flex justify-content-center align-items-center">
                        <div class="col-6">
                            <h2>Macbook Pro</h2>
                            <p class="gray-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <button type="button" class="btn btn-dark">BUY NOW →</button>

                        </div>
                        <div class="col-6">
                            <?php 
                                $get_slides = "select * from slider LIMIT 2,3";
                                $run_slides = mysqli_query($con,$get_slides);
                                while($row_slides=mysqli_fetch_array($run_slides)){
                                    $slide_name = $row_slides['slide_name'];
                                    $slide_image = $row_slides['slide_image'];                              
                                    echo "                               
                                        <div class='item active'>
                                            <img src='admin_area/slides_images/$slide_image'  class='d-block w-100'>
                                        </div>
                                ";
                             }
                            ?>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- banner end -->


    <!-- greeting customer start -->
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <i class="fa-solid fa-heart position-absolute top-50 start-50 translate-middle"
                        style="z-index: 0; opacity: 0.3; font-size: 100px;"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">We Love Our Customer</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural
                            lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fa-solid fa-tag position-absolute top-50 start-50 translate-middle"
                        style="z-index: 0; opacity: 0.3; font-size: 100px; z-index: 0;"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title" style="z-index: 1;">Best Price</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural
                            lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fa-solid fa-thumbs-up position-absolute top-50 start-50 translate-middle"
                        style="z-index: 0; opacity: 0.3; font-size: 100px;"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">100% Original</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural
                            lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- greeting customer end -->


    <!-- products with own carosel start -->
    <div class="container mt-5">
        <h3 class="text-center">Our Latest Collections</h3>
        <?php
            include("includes/testProduct.php");
        ?>
    </div>
    <!-- products with own carosel end -->

    <?php
        include("includes/footer.php");
    ?>



    <!-- scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
    <script src="fontawesome/js/fontawesome.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- own carosel js start -->
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                960: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY > 0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
    </script>
    <!-- own carosel js end -->
</body>

</html>