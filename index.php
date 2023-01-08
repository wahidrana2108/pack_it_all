<!-- navbar start -->
<?php
    $active='Home';
    include("includes/navbar.php");
?>
<!-- navbar end -->


<!-- banner start -->
<div class="container">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="container row  d-flex justify-content-center align-items-center">
                    <div class="col-6">
                        <h2>Macbook Pro</h2>
                        <p class="gray-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <button type="button" class="btn btn-dark">BUY NOW →</button>

                    </div>
                    <div class="col-6">
                        <?php 
                                $get_slides = "select * from slider LIMIT 0,1";
                                $run_slides = mysqli_query($con,$get_slides);
                                while($row_slides=mysqli_fetch_array($run_slides)){
                                    $slide_name = $row_slides['slide_name'];
                                    $slide_image = $row_slides['slide_image'];                              
                                    echo "                               
                                        <div class='item active'>
                                            <img src='admin_area/slides_images/$slide_image'  class='d-block w-100'>
                                        </div>
                                ";
                             }
                            ?>
                    </div>
                </div>
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <div class="container row  d-flex justify-content-center align-items-center">
                    <div class="col-6">
                        <h2>Macbook Pro</h2>
                        <p class="gray-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <button type="button" class="btn btn-dark">BUY NOW →</button>

                    </div>
                    <div class="col-6">
                        <?php 
                                $get_slides = "select * from slider LIMIT 1,1";
                                $run_slides = mysqli_query($con,$get_slides);
                                while($row_slides=mysqli_fetch_array($run_slides)){
                                    $slide_name = $row_slides['slide_name'];
                                    $slide_image = $row_slides['slide_image'];                              
                                    echo "                               
                                        <div class='item active'>
                                            <img src='admin_area/slides_images/$slide_image'  class='d-block w-100'>
                                        </div>
                                ";
                             }
                            ?>
                    </div>
                </div>
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <div class="container row  d-flex justify-content-center align-items-center">
                    <div class="col-6">
                        <h2>Macbook Pro</h2>
                        <p class="gray-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <button type="button" class="btn btn-dark">BUY NOW →</button>

                    </div>
                    <div class="col-6">
                        <?php 
                                $get_slides = "select * from slider LIMIT 2,3";
                                $run_slides = mysqli_query($con,$get_slides);
                                while($row_slides=mysqli_fetch_array($run_slides)){
                                    $slide_name = $row_slides['slide_name'];
                                    $slide_image = $row_slides['slide_image'];                              
                                    echo "                               
                                        <div class='item active'>
                                            <img src='admin_area/slides_images/$slide_image'  class='d-block w-100'>
                                        </div>
                                ";
                             }
                            ?>
                    </div>
                </div>
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- banner end -->


<!-- greeting customer start -->
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <i class="fa-solid fa-heart position-absolute top-50 start-50 translate-middle"
                    style="z-index: 0; opacity: 0.3; font-size: 100px;"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">We Love Our Customer</h5>
                    <p class="card-text text-muted">This is a longer card with supporting text below as a natural
                        lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <i class="fa-solid fa-tag position-absolute top-50 start-50 translate-middle"
                    style="z-index: 0; opacity: 0.3; font-size: 100px; z-index: 0;"></i>
                <div class="card-body text-center">
                    <h5 class="card-title" style="z-index: 1;">Best Price</h5>
                    <p class="card-text text-muted">This is a longer card with supporting text below as a natural
                        lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <i class="fa-solid fa-thumbs-up position-absolute top-50 start-50 translate-middle"
                    style="z-index: 0; opacity: 0.3; font-size: 100px;"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">100% Original</h5>
                    <p class="card-text text-muted">This is a longer card with supporting text below as a natural
                        lead-in to
                        additional content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- greeting customer end -->


<!-- products with own carousel start -->
<div class="container mt-5">
    <h3 class="text-center">Our Latest Collections</h3>

    <div class="container mt-5">
        <div class="owl-carousel owl-theme">
            <?php
                getProduct();
            ?>
        </div>
    </div>
</div>
<!-- products with own carousel end -->

<?php
    include("includes/footer.php");
?>