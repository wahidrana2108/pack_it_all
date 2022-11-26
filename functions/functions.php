<?php
$db = mysqli_connect("localhost","root","","ecom_store");

function getProduct(){
    global $db;
    
    $get_products = "select * from products order by 1 DESC LIMIT 0,8";
    $run_products = mysqli_query($db,$get_products);

    while($row_products=mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        <div class='item remove'>
            <div class='card'>
                <a href='details.php?pro_id=$pro_id'>
                    <img src='admin_area/product_images/$pro_img1' class='card-img-top'>
                </a>
                <div class='card-body'>
                    <h5 class='card-title fw-bolder text-primary'>
                        <a href='details.php?pro_id=$pro_id'>
                            $pro_title
                        </a>
                    </h5>
                    <h6 class='card-text'>
                        <a href='details.php?pro_id=$pro_id'>
                            <span class='fw-bolder'>৳</span> $pro_price
                        </a>
                    </h6>
                    <button class='btn btn-secondary btn-sm mb-1 removeBtn'>
                        <a href='details.php?pro_id=$pro_id'>
                            <i class='fa-solid fa-circle-info me-1'></i>Details
                        </a>
                    </button>
                    <button class='btn btn-success btn-sm removeBtn'>
                        <a href='details.php?pro_id=$pro_id'>
                            <i class='fa-solid fa-cart-arrow-down me-1'> </i> Add to Cart
                        </a>
                    </button>
                </div>
            </div>
        </div>
        ";
    }

}





function getPCat(){
    global $db;
    
    $get_p_cats = "select * from products_categories";
    $run_p_cats = mysqli_query($db,$get_p_cats);

    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];

        echo "
        <li class='nav-item'>
            <a class='nav-link active ms-2 me-2 mb-2 ps-3' aria-current='page' href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a>
        </li>
        ";

    }
}





function getCat(){
    global $db;
    
    $get_cats = "select * from categories";
    $run_cats = mysqli_query($db,$get_cats);

    while($row_cats=mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

        echo "
        <li class='nav-item'>
            <a class='nav-link active ms-2 me-2 mb-2 ps-3' aria-current='page' href='shop.php?p_cat=$cat_id'>$cat_title</a>
        </li>
        ";

    }
}




function button(){
    global $db;
    
    $per_page=6;

    $query = "select * from products";
    $result = mysqli_query($db,$query);
    $total_records = mysqli_num_rows($result);
    $total_pages = ceil($total_records / $per_page);

    echo"<a class='btn btn-secondary' href='shop.php?page=1'>".'First Page'."</a>";
    for($i=1; $i<=$total_pages; $i++){
        echo "
            <a class='btn btn-secondary' href='shop.php?page=".$i."'>".$i."</a>
        ";
        }
    echo"<a class='btn btn-secondary' href='shop.php?page=$total_pages'>".'Last Page'."</a>";
}

?>
