<?php
include("includes/db.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product - Admin</title>
    <link rel="icon" type="image/x-icon" href="admin_images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/fedd93fc11.js" crossorigin="anonymous"></script>
    <script src="js/tinymce/js/tinymce/tinymce.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-md-12 mt-3">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php"><i class="fa-solid fa-gauge"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Insert Product</li>
            </ul>
        </div>

        <form method="post" enctype="multipart/form-data">
            <legend>Add Product Details</legend>
            <div class="form-floating mb-3">
                <input name="product_title" type="text" class="form-control" placeholder="Enter Product Title" required>
                <label for="">Enter Product Title</label>
            </div>
            <div class="form-floating mb-3">
                <select name="cat" class="form-select" id="" aria-label="" required>
                    <option selected disabled>Select Category</option>
                    <?php
                        $get_cat = "select * from categories";
                        $run_cat = mysqli_query($con,$get_cat);

                        while ($row_cat = mysqli_fetch_array($run_cat)){
                            $cat_id = $row_p_cats['cat_id'];
                            $cat_title = $row_cat['cat_title'];

                            echo "
                                <option value='$cat_id'> $cat_title</option>
                            ";
                        }
                    ?>
                </select>
                <label for="">Select Category</label>
            </div>
            <div class="form-floating mb-3">
                <select name="product_cat" class="form-select" aria-label="" required>
                    <option selected disabled>Select Product Category</option>
                    <?php
                        $get_p_cats = "select * from products_categories";
                        $run_p_cats = mysqli_query($con,$get_p_cats);

                        while ($row_p_cats = mysqli_fetch_array($run_p_cats)){
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            $p_cat_title = $row_p_cats['p_cat_title'];

                            echo "
                                <option value='$p_cat_id'> $p_cat_title</option>
                            ";
                        }
                    ?>
                </select>
                <label for="">select Product Category</label>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Product Image 1:</label>
                <input name="product_img1" type="file" class="form-control" id="" aria-describedby="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Product Image 2:</label>
                <input name="product_img2" type="file" class="form-control" id="" aria-describedby="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Product Image 3:</label>
                <input name="product_img3" type="file" class="form-control" id="" aria-describedby="">
            </div>
            <div class="form-floating mb-3">
                <input name="product_price" type="number" class="form-control" id="" placeholder="Enter Product Price" required>
                <label for="">Enter Price</label>
            </div>
            <div class="form-floating mb-3">
                <input name="product_keyword" type="text" class="form-control" id="" placeholder="Enter Product Keyword" required>
                <label for="">Enter Keyword</label>
            </div>
            <div class="form-floating mb-3">
                <textarea name="product_desc" class="form-control" placeholder="Leave a comment here" id="" style="height: 100px"
                    required></textarea>
                <label for="">Enter Description</label>
            </div>
            <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
        </form>
    </div>
</body>

</html>


<?php
if(isset($_POST['submit'])){
    $product_title = $_POST['product_title'];
    $cat = $_POST['cat'];
    $product_cat = $_POST['product_cat'];
    $product_price = $_POST['product_price'];
    $product_keyword = $_POST['product_keyword'];
    $product_desc = $_POST['product_desc'];

    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");

    $insert_product =  "insert into products (cat_id,p_cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keyword,product_desc) values ('$cat','$product_cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keyword','$product_desc')";

    $run_product = mysqli_query($con,$insert_product);

    if($run_product){
        echo "<script>alert('Product has been added Successfully!')</script>";
        echo "<script>window.open('insert_product.php','_self')</script>";
    }
}
?>