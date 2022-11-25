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

            <div class="col-md-10">
                <div class="sDetails">
                    <h1>Shop</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem id expedita </p>
                </div>
                <?php
                        include("includes/testProductCard.php");
                    ?>

            </div>
        </div>

    </div>
</div>
<!-- product end -->


<?php
    include("includes/footer.php");
?>