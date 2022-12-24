<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>


<?php
        if(isset($_GET['edit_product'])){
            $edit_id = $_GET['edit_product'];
            $get_p = "select * from products where product_id='$edit_id'";
            $run_edit = mysqli_query($con,$get_p);
            $row_edit = mysqli_fetch_array($run_edit);

            $p_id = $row_edit['product_id'];
            $p_title = $row_edit['product_title'];
            $p_cat = $row_edit['p_cat_id'];
            $cat = $row_edit['cat_id'];
            $p_image1 = $row_edit['product_img1'];
            $p_image2 = $row_edit['product_img2'];
            $p_image3 = $row_edit['product_img3'];
            $p_price = $row_edit['product_price'];
            $p_keyword = $row_edit['product_keyword'];
            $p_desc = $row_edit['product_desc'];

        }

        $get_p_cat = "select * from products_categories where p_cat_id='$p_cat'";
        $run_p_cat = mysqli_query($con,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];

        $get_cat = "select * from categories where cat_id='$cat'";
        $run_cat = mysqli_query($con,$get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_title = $row_cat['cat_title'];



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
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><h6><i class="fa-solid fa-gauge ps-2 pt-2"></i> Dashboard</h6></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-pen pt-2"></i> Edit Product</li>
                </ol>
            </nav>
        </div>

        <form method="post" enctype="multipart/form-data">
            <legend>Update Product Information</legend>
            <div class="form-floating mb-3">
                <input name="product_title" type="text" class="form-control" placeholder="Enter Product Title" value="<?php echo $p_title; ?>" required>
                <label for="">Enter Product Title</label>
            </div>
            <div class="form-floating mb-3">
                <select name="cat" class="form-select" id="" aria-label="" required>
                    <option  value="<?php echo $cat; ?>" selected disabled><?php echo $cat_title; ?></option>
                    <?php
                        $get_cat = "select * from categories";
                        $run_cat = mysqli_query($con,$get_cat);

                        while ($row_cat = mysqli_fetch_array($run_cat)){
                            $cat_id = $row_cat['cat_id'];
                            $cat_title = $row_cat['cat_title'];

                            echo "
                                <option value='$cat_id'> $cat_title</option>
                            ";
                        }
                    ?>
                </select>
                <label for="">Select Gender Category</label>
            </div>
            <div class="form-floating mb-3">
                <select name="product_cat" class="form-select" aria-label="" required>
                    <option  value="<?php echo $p_title; ?>" selected disabled><?php echo $p_cat_title; ?></option>
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
                <br>
                <img src="product_images/<?php echo $p_image1; ?>" height="50px" width="50px">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Product Image 2:</label>
                <input name="product_img2" type="file" class="form-control" id="" aria-describedby="" required>
                <br>
                <img src="product_images/<?php echo $p_image2; ?>" height="50px" width="50px">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Product Image 3:</label>
                <input name="product_img3" type="file" class="form-control" id="" aria-describedby="" required>
                <br>
                <img src="product_images/<?php echo $p_image3; ?>" height="50px" width="50px">
            </div>
            <div class="form-floating mb-3">
                <input name="product_price" type="number" class="form-control" id="" placeholder="Enter Product Price"  value="<?php echo $p_price; ?>" required>
                <label for="">Enter Price</label>
            </div>
            <div class="form-floating mb-3">
                <input name="product_keyword" type="text" class="form-control" id="" placeholder="Enter Product Keyword"  value="<?php echo $p_keyword; ?>" required>
                <label for="">Enter Keyword</label>
            </div>
            <div class="form-floating mb-3">
                <textarea name="product_desc" class="form-control" placeholder="Leave a comment here" id="" style="height: 100px" required><?php echo $p_desc; ?></textarea>
                <label for="">Enter Description</label>
            </div>
            <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">
        </form>
    </div>
</body>

</html>


<?php
if(isset($_POST['update'])){
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

    $update_product = "update products set cat_id='$cat',p_cat_id='$product_cat',date=NOW(),product_title='$product_title',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img2',product_price='$product_price',product_keyword='$product_keyword',product_desc='$product_desc' where product_id='$p_id'";
    $run_product = mysqli_query($con,$update_product);
    if($run_product){
        echo "<script>window.open('index.php?view_products','_self')</script>";
        echo "<script>alert('Product Updated Successfully!')</script>";
    }
}
?>


<?php } ?>
