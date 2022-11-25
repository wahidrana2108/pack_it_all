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
            <div class="col-md-10 ">
                <h1>Details</h1>
                <p>Style That Comfort You</p>
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
                                    <img src="admin_area/product_details_images/Product-3a.jpg" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="admin_area/product_details_images/Product-3c.jpg" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="admin_area/product_details_images/Product-3c.jpg" class="d-block w-100"
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
                            <form>
                                <fieldset>
                                    <legend>Polo Shirt-Men</legend>

                                    <div class="mb-2">
                                        <label for="" class="">Select Quantity</label>
                                        <select id="" class="form-select">
                                            <option selected>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="">Select Size</label>
                                        <select id="" class="form-select">
                                            <option selected>Small</option>
                                            <option>Meduim</option>
                                            <option>Large</option>
                                            <option>Extra large</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success"><i
                                            class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="card p-3  mt-3">
                            <div class="dis">
                                <h5>Polo Shirt-Men</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam aperiam esse
                                    temporibus.</p>
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
                    <?php
                            include("includes/testProduct.php");
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