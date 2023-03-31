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
                <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                <li class="breadcrumb-item"><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"> <?php echo $p_cat_title; ?> </a></li>
                <li class="breadcrumb-item"><?php echo $pro_title; ?></li>
            </ul>
        </div>
        <div class="d-flex">
            <div class="col-md-2 me-1">
                <?php
                        include("includes/sidebar.php");
                    ?>
            </div>
            <div class="col-md-10 ">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="admin_area/product_images/<?php echo $pro_img3; ?>" class="d-block w-100"
                                        alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3">

                            <?php add_cart(); ?>
                            <form action="details.php?add_cart=<?php echo $product_id; ?>" method="post">
                                <fieldset>
                                    <legend><?php echo $pro_title; ?></legend>

                                    <div class="mb-2">
                                        <label for="" class="">Select Quantity</label>
                                        <select name="product_qty" id="" class="form-select" required>
                                            <option selected>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="">Select Size</label>
                                        <select name="product_size" id="" class="form-select" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Product size must be selected')">
                                            <option selected>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                            <option>Extra large</option>
                                        </select>
                                    </div>
                                    <div class='fw-bolder text-success mb-1'>Price: ৳ <?php echo $pro_price; ?></div>
                                    <div class='fw-bolder text-success mb-1'>Available stock: <?php echo $pro_stock; ?></div>
                                    <button type="submit" class="btn btn-sm btn-success"><i
                                            class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="card p-3  mt-3">
                            <div class="dis">
                                <h5><?php echo $pro_title; ?></h5>
                                <p><?php echo $pro_desc; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mLike mt-3">
                <div>
                    <h5 class="text-center">Products You May Like <i class="fa-solid fa-right"></i></h5>
                    <div class="owl-carousel owl-theme">
                        <?php
                            randomProduct();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product start -->
<?php
    include("includes/footer.php");
?>