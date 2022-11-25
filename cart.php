<!-- navbar start -->
<?php
$active='Shopping Cart';
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


        <?php
            include("includes/cart.php");
        ?>

    </div>
</div>
<!-- product end -->

<?php
    include("includes/footer.php");
?>