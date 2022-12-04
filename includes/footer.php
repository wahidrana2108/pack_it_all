<div id="footer">
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <h4>Pages</h4>
                <ul style="text-decoration: none;">
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                </ul>

                <hr>

                <h4>User Section</h4>

                <ul>
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_register.php">Register</a></li>
                </ul>
                <hr class="visually-hidden">
            </div>
            <!-- divide -->
            <div class="col-sm-6 col-md-3">
                <h4>Top Product Catagories</h4>
                <ul style="text-decoration: none;">
                    <?php
                        $get_p_cats = "select * from products_categories";
                        $run_p_cats = mysqli_query($con,$get_p_cats);

                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            echo "
                                <li>
                                    <a href='shop.php?p_cat=$p_cat_id'>
                                        $p_cat_title
                                    </a>
                                </li>
                            ";
                        }
                    ?>
                </ul>
                <hr class="visually-hidden">
            </div>

            <div class="col-sm-6 col-md-3">
                <h4>Find Us</h4>
                <p>
                    <strong>Pack It All</strong>
                    <br />Facebook
                    <br />What's app
                    <br />01770-888280
                    <br />pickitall@suppot.com
                    <br /><strong>Wahid Rana</strong><br>
                    <a href="contact.php" class="fw-bold">More contact info</a>
                </p>
            </div>


            <div class="col-sm-6 col-md-3">
                <h4>Get The News</h4>
                <p class="text-muted">
                    Don't miss our latest update.
                </p>
                <form action="" method="post">
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                        <span>
                            <input type="submit" value="subscribe" class="btn btn-primary">
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Keep In Touch</h4>
                <p class="social">
                    <a href="*" class=""><i class="fa-brands fa-facebook"></i></a>
                    <a href="*" class=""><i class="fa-brands fa-facebook-messenger"></i></a>
                    <a href="*" class=""><i class="fa-brands fa-twitter"></i></a>
                    <a href="*" class=""><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="*" class=""><i class="fa-solid fa-inbox"></i></a>
                </p>
            </div>

        </div>
    </div>
</div>

<div class="bg-secondary text-center p-1">
        <p class="">&copy;2022-2023 Pack It All all right reserved</p>
</div>

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