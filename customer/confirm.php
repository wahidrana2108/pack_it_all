<!-- navbar start -->
<?php
    $active='My Account';
    include("includes/navbar.php");
?>
<!-- navbar end -->
<div class="container col-md-6">
<h1 class="text-center">LOGIN</h1>
    <form action="checkout.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control" name="c_email" required>
        </div>
        <div class="form-group">
            <label>Enter Password</label>
            <input type="password" class="form-control" name="c_pass" required>
        </div>
        <div class="text-center mt-2">
            <button type="submit" name="login" value="login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
        </div>
        <small class="fw-bolder"><i>Forgot Password? <a href="customer_register.php">Click here</a></i></small><br>
        <small class="fw-bolder"><i>Don't have an account? <a href="customer_register.php">Click here</a></i></small>
    </form>
</div>