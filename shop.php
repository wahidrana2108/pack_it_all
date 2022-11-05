<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Pack It All</title>
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
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
    <!-- temp nav start -->

    <!-- navbar start -->
    <div class="container">
        <h6 class="bg-secondary font-weight-bolder text-center" style="color: white;">Winter sale 50% Off</h6>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo.png" style="height: 50px;" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item activePage">
                            <a class="nav-link active" aria-current="page" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Shopping Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                        </li>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 ms-auto mb-lg-0">
                        <li class="nav-item">
                            <form class="d-flex mt-1 ms-md-5" role="search">
                                <input class="form-control me-2 .col-md-4" type="search"
                                    placeholder="Search in Pack It All" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit"><i
                                        class="fas fa-search"></i></button>
                            </form>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link active mt-1" aria-current="page" href="#">
                                <button type="button" class="btn position-relative"> <i
                                        class="fa-solid fa-cart-arrow-down"> </i><span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">+9
                                        <span class="visually-hidden">Added to cart</span></span>
                                </button></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->




    <!-- product start -->
    <div id="content" class="mt-3">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ul>
            </div>


            <div class="d-flex">
                <div class="col-md-2 me-1">
                    <?php
                        include("includes/sidebar.php");
                    ?>
    
                </div>
    
                <div class="col-md-10">
                    <h1>Shop</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem id expedita </p>

                    <div class="container mt-5">
        <h3 class="text-center">Our Latest Collections</h3>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Men</h5>
                        <h6 class="card-text">৳1500</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Women</h5>
                        <h6 class="card-text">৳1200</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Men</h5>
                        <h6 class="card-text">৳1500</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Women</h5>
                        <h6 class="card-text">৳1200</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Men</h5>
                        <h6 class="card-text">৳1500</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Women</h5>
                        <h6 class="card-text">৳1200</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Men</h5>
                        <h6 class="card-text">৳1500</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Women</h5>
                        <h6 class="card-text">৳1200</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Men</h5>
                        <h6 class="card-text">৳1500</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Women</h5>
                        <h6 class="card-text">৳1200</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Men</h5>
                        <h6 class="card-text">৳1500</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="admin_area/product_images/product-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-primary">T-Shirt for Women</h5>
                        <h6 class="card-text">৳1200</h6>
                        <button class="btn btn-secondary btn-sm mb-1"><i
                                class="fa-solid fa-circle-info me-1"></i>Details</button>
                        <button class="btn btn-success btn-sm"><i class="fa-solid fa-cart-arrow-down me-1"> </i> Add to
                            Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
                </div>
            </div>

        </div>
    </div>
    <!-- product start -->






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