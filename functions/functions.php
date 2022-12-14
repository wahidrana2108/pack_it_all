<?php
$db = mysqli_connect("localhost","root","","ecom_store");



function getRealIpUser(){
    switch(true){    
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
    }
}


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





function randomProduct(){
    global $db;
    
    $get_products = "select * from products order by rand() LIMIT 0,3";
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
            <a class='nav-link active ms-2 me-2 mb-2 ps-3' aria-current='page' href='shop.php?cat=$cat_id'>$cat_title</a>
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






function productCategory(){
    global $db;
    if(isset($_GET['p_cat'])){
        $p_cat_id = $_GET['p_cat'];
        $get_p_cat = "select * from products_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($db,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products = "select * from products where p_cat_id='$p_cat_id'";
        $run_products = mysqli_query($db,$get_products);
        $count = mysqli_num_rows($run_products);

        if($count==0){
            echo "
            <div class='sDetails'>
                <h1>$p_cat_title</h1>
                <p>No product Found In This category. </p>
            </div>
            ";
        }
        else{
            echo "
                <div class='sDetails'>
                    <h1>$p_cat_title</h1>
                    <p>$p_cat_desc </p>
                </div>
            ";
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];
    
            echo "
                <div class='col remove'>
                    <div class='card'>
                        <a href='details.php?pro_id=$pro_id'>
                            <img src='admin_area/product_images/$pro_img1' class='card-img-top'>
                        </a>
                        <div class='card-body'>
                            <h5 class='card-title fw-bolder text-primary'> $pro_title </a></h5>
                            <h6 class='card-text'><a href='details.php?pro_id=$pro_id'><span class='fw-bolder'>৳</span> $pro_price</a></h6>
                            <button class='btn btn-secondary btn-sm mb-1 removeBtn'><a href='details.php?pro_id=$pro_id'><i class='fa-solid fa-circle-info me-1'></i>Details</a></button>
                            <button class='btn btn-success btn-sm removeBtn'><a href='details.php?pro_id=$pro_id'><i class='fa-solid fa-cart-arrow-down me-1'> </i> Add to Cart</a></button>
                        </div>
                    </div>
                </div>
            ";
        }
    }
    
}




function genderCategory(){
    global $db;
    if(isset($_GET['cat'])){
        $cat_id = $_GET['cat'];
        $get_cat = "select * from categories where cat_id='$cat_id'";
        $run_cat = mysqli_query($db,$get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_title = $row_cat['cat_title'];
        $cat_desc = $row_cat['cat_desc'];
        
        $get_cats = "select * from products where cat_id='$cat_id'";
        $run_products = mysqli_query($db,$get_cats);
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            echo "
            <div class='sDetails'>
                <h1>$cat_title</h1>
                <p>No product Found In This category. </p>
            </div>
            ";
        }
        else{
            echo "
                <div class='sDetails'>
                    <h1>$cat_title</h1>
                    <p>$cat_desc</p>
                </div>
            ";
        }
        while($row_products=mysqli_fetch_array($run_products)){
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];
    
            echo "
                <div class='col remove'>
                    <div class='card'>
                        <a href='details.php?pro_id=$pro_id'>
                            <img src='admin_area/product_images/$pro_img1' class='card-img-top'>
                        </a>
                        <div class='card-body'>
                            <h5 class='card-title fw-bolder text-primary'> $pro_title </a></h5>
                            <h6 class='card-text'><a href='details.php?pro_id=$pro_id'><span class='fw-bolder'>৳</span> $pro_price</a></h6>
                            <button class='btn btn-secondary btn-sm mb-1 removeBtn'><a href='details.php?pro_id=$pro_id'><i class='fa-solid fa-circle-info me-1'></i>Details</a></button>
                            <button class='btn btn-success btn-sm removeBtn'><a href='details.php?pro_id=$pro_id'><i class='fa-solid fa-cart-arrow-down me-1'> </i> Add to Cart</a></button>
                        </div>
                    </div>
                </div>
            ";
        }
    }   
}
























function add_cart(){
    global $db;
    
    if(isset($_GET['add_cart'])){
        
        $ip_add = getRealIpUser();
     
        $p_id = $_GET['add_cart'];    
        $product_qty = $_POST['product_qty'];       
        $product_size = $_POST['product_size'];
        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";       
        $run_check = mysqli_query($db,$check_product);      
        if(mysqli_num_rows($run_check)>0){
            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
        }
        else{
            $query = "insert into cart (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
            $run_query = mysqli_query($db,$query);
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
        }
    }
}





function item(){
    global $db;
    $ip_add = getRealIpUser();
    $get_items = "select * from cart where ip_add='$ip_add'";
    $run_items = mysqli_query($db,$get_items);
    $count_items = mysqli_num_rows($run_items);
    echo $count_items;
}



function totalPrice(){
    global $db;
    $ip_add = getRealIpUser();
    $total = 0;
    $select_cart = "select * from cart where ip_add='$ip_add'";
    $run_cart = mysqli_query($db,$select_cart);
    while($record=mysqli_fetch_array($run_cart)){
        $pro_id = $record['p_id'];
        $pro_qty = $record['qty'];
        $get_price = "select * from products where product_id='$pro_id'";
        $run_price = mysqli_query($db,$get_price);
        while($row_price=mysqli_fetch_array($run_price)){
            $sub_total = $row_price['product_price']*$pro_qty;
            $total +=$sub_total;
        }
    }
    echo "$" . $total;
}







?>
