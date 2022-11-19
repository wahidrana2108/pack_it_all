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
    <?php
        include("includes/navbar.php");
    ?>
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

                <div class="col-md-10 ">
                    <h1>Details</h1>
                    <p>Style That Comfort You</p>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="admin_area/product_details_images/Product-3a.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="admin_area/product_details_images/Product-3c.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="admin_area/product_details_images/Product-3c.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3">
                                <form>
                                    <fieldset>
                                        <legend>Polo Shirt-Men</legend>

                                        <div class="mb-2">
                                            <label for="" class="">Select Quantity</label>
                                            <select id="" class="form-select">
                                                <option selected>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <label for="" class="">Select Size</label>
                                            <select id="" class="form-select">
                                                <option selected>Small</option>
                                                <option>Meduim</option>
                                                <option>Large</option>
                                                <option>Extra large</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success"><i class="fa-solid fa-cart-shopping"></i> Proceed to
                                            checkout</button>
                                    </fieldset>
                                </form>

                            </div>
                            <div class="card p-3  mt-3">
                                <div class="dis">
                                    <h5>Polo Shirt-Men</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam aperiam esse
                                        temporibus.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    

                </div>
                
            </div>
            <div class="container">
                <div class="mLike mt-3">
                    <div>
                        <h5 class="text-center">Products You May Like <i class="fa-solid fa-right"></i></h5>
                        <?php
            include("includes/testProduct.php");
        ?>
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
            nav: true,
            dots: false,
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