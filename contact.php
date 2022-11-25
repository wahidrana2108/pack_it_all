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
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ul>
        </div>


        <div class="d-flex">
            <div class="col-md-2 me-1">
                <?php
                        include("includes/sidebar.php");
                    ?>

            </div>

            <div class="col-md-10">
                <div class="sDetails">
                    <h1>Feel free to Contact Us</h1>
                    <p>If you have any questions, feel free to contact us. Our Customer Service work <span
                            class="fw-bolder">24/7</span></p>
                    <form action="contact.php" method="post">
                        <!-- form Begin -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Name</label>

                            <input type="text" class="form-control" name="name" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Email</label>

                            <input type="text" class="form-control" name="email" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Subject</label>

                            <input type="text" class="form-control" name="subject" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Message</label>

                            <textarea name="message" class="form-control"></textarea>

                        </div><!-- form-group Finish -->

                        <div class="text-center mt-2">
                            <!-- text-center Begin -->

                            <button type="submit" name="submit" class="btn btn-primary"><i
                                    class="fa-solid fa-messages"></i>Send Message </button>

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