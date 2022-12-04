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

        <div class="col-md-9 m-auto">
            <div class="card p-4 ">
                <h1 class="text-center">Register a new account</h1>
                <form action="customer_register.php" method="post">

                    <div class="form-group">

                        <label>Full Name</label>

                        <input type="text" class="form-control" name="c_name" required>

                    </div>

                    <div class="form-group">

                        <label>Email Address</label>

                        <input type="email" class="form-control" name="c_email" required>

                    </div>

                    <div class="form-group">

                        <label>Choose Password</label>

                        <input type="password" class="form-control" name="c_password" required>

                    </div>


                    <div class="form-group">

                        <label>Select Country</label>

                        <input type="text" class="form-control" name="c_country" required>

                    </div>


                    <div class="form-group">

                        <label>Select City</label>

                        <input type="text" class="form-control" name="c_city" required>

                    </div>

                    <div class="form-group">

                        <label>Full Address</label>

                        <textarea name="c_address" class="form-control"></textarea>

                    </div>

                    
                    <div class="form-group">

                        <label>Your Contract</label>

                        <input type="text" class="form-control" name="c_contract" required>

                    </div>

                    <div class="form-group pt-2">

                        <label>Your Recent Photo</label>

                        <input type="file" class="form-control" name="c_image" required>

                    </div>


                    <div class="text-center mt-2">

                        <button type="submit" name="register" class="btn btn-primary">Register</button>

                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<!-- product start -->


<?php
    include("includes/footer.php");
?>


<?php
    if(isset($_POST['register'])){
        $c_name = $_POST['c_name'];
        $c_email = $_POST['c_email'];
        $c_password = $_POST['c_password'];
        $c_country = $_POST['c_country'];
        $c_city = $_POST['c_city'];
        $c_address = $_POST['c_address'];
        $c_contract = $_POST['c_contract'];
        $c_image = $FILES['c_image']['name'];
        $c_image_tmp = $FILES['c_image']['tmp_name'];
        $c_ip = getRealIpUser();
    }
?>