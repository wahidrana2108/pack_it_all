<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Pack It All</title>
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
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ul>
            </div>


            <div class="">
                <h1>Cart</h1>
                <p>You currently added <span class="fw-bolder">5</span> items in cart</p>
                <div class="row">
                    <div class="col-sm-6 col-md-9">
                        <table class="table table-striped-columns text-center" id="resize">
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Size</th>
                                <th>Sub-Total</th>
                            </tr>
                            <tr>
                                <td> <img style="width: 100px;" src="admin_area/product_images/product-1.jpg" alt="...">T-shirt Female</td>
                                <td><h6>3</h6></td>
                                <td><h6>৳1500</h6></td>
                                <td><h6>Large</h6></td>
                                <td><h6>৳4500</h6></td>
                            </tr>
                            <tr>
                                <td> <img style="width: 100px;" src="admin_area/product_images/product-2.jpg" alt="...">T-shirt Female</td>
                                <td><h6>2</h6></td>
                                <td><h6>৳2000</h6></td>
                                <td><h6>Large</h6></td>
                                <td><h6>৳4000</h6></td>
                            </tr>
                        </table>
                        
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title text-center">Order Summary</h5>
                          <hr>
                          <h6>Order Sub-Total:  <span class="justify-content-right fw-bolder">৳5000</span></h6>
                          <hr>
                          <h6>Shipping Cost:  <span class="justify-content-right fw-bolder">৳50</span></h6>
                          <hr>
                          <h6>Tax:  <span class="justify-content-right fw-bolder">৳50</span></h6>
                          <hr>
                          <h6 class="fw-bolder">Total:  <span class="justify-content-right fw-bolder">৳5100</span></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-3">
                    <a href="index.php" class="btn btn-secondary btn-sm mb-1" role="button"><i class="fa-solid fa-chevron-left me-1"></i>Continue Shopping</a>
                    <div class="btn-group">
                
                        <a href="cart.php" class="btn btn-primary btn-sm mb-1" role="button"><i class="fa-solid fa-rotate-right me-1"></i>Refresh</a>
                        <a href="mDetails.php" class="btn btn-success btn-sm mb-1" role="button"><i class="fa-solid fa-cart-shopping me-1"></i>Checkout</a>
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