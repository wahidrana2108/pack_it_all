<!-- navbar start -->
<?php
    include("includes/navbar.php");
?>
<!-- navbar end -->


<!-- customer register start -->
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
                <?php
                    if(!isset($_SESSION['customer_email'])){
                        include("customer/includes/customer_login.php");
                    }
                    else{
                        include("payment_option.php");
                    }
                ?>
            </div>
        </div>

    </div>
</div>
<!-- customer register end -->


<?php
    include("includes/footer.php");
?>
