<?php
    if(!isset($_GET['p_cat'])){
        if(!isset($_GET['cat'])){

            $per_page=6;

            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }
                
            else{
                $page=1;
            }

            $start_from = ($page-1) * $per_page;
            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
            $run_products = mysqli_query($con,$get_products);

            while($row_products=mysqli_fetch_array($run_products)){
                $pro_id = $row_products['product_id'];
                $pro_title = $row_products['product_title'];
                $pro_price = $row_products['product_price'];
                $pro_img1 = $row_products['product_img1'];

                echo "
                <div class='col remove'>
                    <div class='card'>
                        <a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_img1' class='card-img-top'></a>
                        <div class='card-body'>
                            <h5 class='card-title fw-bolder text-primary'><a href='details.php?pro_id=$pro_id'> $pro_title </a></h5>
                            <h6 class='card-text'><a href='details.php?pro_id=$pro_id'><span class='fw-bolder'>৳</span> $pro_price </a></h6>
                            <button class='btn btn-secondary btn-sm mb-1 removeBtn'><a href='details.php?pro_id=$pro_id'><i class='fa-solid fa-circle-info me-1'></i> Details</a></button>
                            <button class='btn btn-success btn-sm removeBtn'><a href='details.php?pro_id=$pro_id'><i class='fa-solid fa-cart-arrow-down me-1'> </i> Add to Cart </a>
                            </button>
                        </div>
                    </div>
                </div>
                ";
            }
        }
    }
?>