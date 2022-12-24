<!-- navbar start -->
<?php
    session_start();

    include("includes/db.php");
    include("functions/functions.php");

    include("includes/header.php");
?>



<?php 
    if(isset($_GET['pro_id'])){ 
        $product_id = $_GET['pro_id'];
        $get_product = "select * from products where product_id='$product_id'";
        $run_product = mysqli_query($con,$get_product);
        $row_product = mysqli_fetch_array($run_product);
        $p_cat_id = $row_product['p_cat_id'];
        $pro_title = $row_product['product_title'];
        $pro_price = $row_product['product_price'];
        $pro_desc = $row_product['product_desc'];
        $pro_img1 = $row_product['product_img1'];
        $pro_img2 = $row_product['product_img2'];
        $pro_img3 = $row_product['product_img3'];
        $get_p_cat = "select * from products_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
    }
?>

<!-- navbar end -->


<!-- customer register start -->
<div id="content" class="mt-3">
    <div class="container">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><h6><i class="fa-solid fa-home ps-2 pt-2"></i> Home</h6></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-book pt-2"></i> Rider Registration</li>
                </ol>
            </nav>
        </div>

        <div class="col-md-9 m-auto">
            <div class="card p-4 ">
                <h1 class="text-center">Register a new account</h1>
                <form action="rider_register.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <label>Full Name</label>

                        <input type="text" class="form-control" name="r_name" required>

                    </div>

                    <div class="form-group">

                        <label>Email Address</label>

                        <input type="email" class="form-control" name="r_email" required>

                    </div>

                    <div class="form-group">

                        <label>Choose Password</label>

                        <input type="password" class="form-control" name="r_pass" required>

                    </div>


                    <div class="form-group">

                        <label>Select Country</label>

                        <input type="text" class="form-control" name="r_country" required>

                    </div>


                    <div class="form-group">

                        <label>Select City</label>

                        <input type="text" class="form-control" name="r_city" required>

                    </div>

                    <div class="form-group">

                        <label>Full Address</label>

                        <textarea name="r_address" class="form-control"></textarea>

                    </div>

                    
                    <div class="form-group">

                        <label>Your Contract</label>

                        <input type="number" class="form-control" name="r_contact" required>

                    </div>

                    <div class="form-group">

                        <label>Your NID</label>

                        <input type="number" class="form-control" name="r_nid" required>

                    </div>

                    <div class="form-group pt-2">

                        <label>Your Recent Photo</label>

                        <input type="file" class="form-control" name="r_image" required>

                    </div>


                    <div class="text-center mt-2">

                        <button type="submit" name="rider_register" class="btn btn-primary">Register</button>

                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<!-- customer register end -->


<?php
    include("includes/footer.php");
?>

<?php
    if(isset($_POST['rider_register'])){
        $r_name = $_POST['r_name'];
        $r_email = $_POST['r_email'];
        $r_pass = $_POST['r_pass'];
        $r_country = $_POST['r_country'];
        $r_city = $_POST['r_city'];
        $r_address = $_POST['r_address'];
        $r_contact = $_POST['r_contact'];
        $r_nid = $_POST['r_nid'];
        $r_image = $_FILES['r_image']['name'];
        $r_image_tmp = $_FILES['r_image']['tmp_name'];
        $r_ip = getRealIpUser();

        move_uploaded_file($r_image_tmp,"rider_images/$r_image");

        $insert_rider = "insert into delivery_man (rider_name,rider_email,rider_pass,rider_country,rider_city,rider_address,rider_contact,rider_nid,rider_image,rider_ip) values ('$r_name','$r_email','$r_pass','$r_country','$r_city','$r_address','$r_contact','$r_nid','$r_image','$r_ip')";


        $run_rider = mysqli_query($con,$insert_rider);
        
        if($run_rider){
            $_SESSION['rider_email']=$r_email;
            echo "<script>window.open('index.php?view_payments','_self')</script>";
            echo "<script>alert('Rider Registered successfully!')</script>";
        }
        else{
            echo "<script>window.open('rider_register.php','_self')</script>";
            echo "<script>alert('Something Went Wrong!')</script>";
        }
    }
?>