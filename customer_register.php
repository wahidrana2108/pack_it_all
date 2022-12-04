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
                <li class="breadcrumb-item active" aria-current="page">Registration</li>
            </ul>
        </div>


        <div class="d-flex">
            <div class="col-md-9">
                <div class="card p-4 ">
                    <h1 class="text-center">Register a new account</h1>
                    <form action="customer_register.php" method="post">
                        <!-- form Begin -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Your Name</label>

                            <input type="text" class="form-control" name="name" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Your Email</label>

                            <input type="email" class="form-control" name="email" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Your Password</label>

                            <input type="password" class="form-control" name="password" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Your Address</label>

                            <textarea name="Address" class="form-control"></textarea>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Your City</label>

                            <input type="text" class="form-control" name="city" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Your Country</label>

                            <input type="text" class="form-control" name="country" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Your Name</label>

                            <input type="file" class="form-control" name="dp" required>

                        </div><!-- form-group Finish -->



                        <div class="text-center mt-2">
                            <!-- text-center Begin -->

                            <button type="submit" name="submit" class="btn btn-primary">Register</button>

                        </div><!-- text-center Finish -->

                    </form><!-- form Finish -->
                </div>


            </div>
        </div>

    </div>
</div>
<!-- product start -->


<?php
    include("includes/footer.php");
?>