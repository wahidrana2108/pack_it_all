<!-- navbar start -->
<?php
    $active='Contact Us';
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

                    <?php 
                       
                       if(isset($_POST['submit'])){
                           
                           /// Admin receives message with this ///                          
                           $sender_name = $_POST['name'];
                           $sender_email = $_POST['email'];
                           $sender_subject = $_POST['subject'];
                           $sender_message = $_POST['message'];
                           $receiver_email = "jacquelinechavezkh@gmail.com";
                           mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                           

                           /// Auto reply to sender with this ///
                           
                           $email = $_POST['email'];
                           $subject = "Welcome to my website";
                           $msg = "Thanks for sending us message. ASAP we will reply your message";
                           $from = "jacquelinechavezkh@gmail.com";
                           mail($email,$subject,$msg,$from);
                           echo "<h2 class='text-center text-success m-auto pt-3'> Your message has sent successfully! </h2>";
                           
                       }
                       
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