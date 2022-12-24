<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
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
                    <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-pen pt-2"></i> Insert Product Category</li>
                </ol>
            </nav>
        </div>

        <form method="post" enctype="multipart/form-data">
            <legend>Insert Products Category</legend>
            <div class="form-floating mb-3">
                <input name="category_title" type="text" class="form-control" placeholder="Enter Category Title" required>
                <label for="">Enter Product Category Title</label>
            </div>

            <div class="form-floating mb-3">
                <textarea name="category_desc" class="form-control" placeholder="Leave a comment here" id="" style="height: 100px" required></textarea>
                <label for="">Enter Products Category Description</label>
            </div>
            <input name="submit" value="Insert Product Category" type="submit" class="btn btn-primary form-control">
        </form>
    </div>
</body>

</html>


<?php
if(isset($_POST['submit'])){
    $category_title = $_POST['category_title'];
    $category_desc = $_POST['category_desc'];


    $insert_category =  "insert into products_categories (p_cat_title,p_cat_desc) values ('$category_title','$category_desc')";

    $run_category = mysqli_query($con,$insert_category);

    if($run_category){
        echo "<script>alert('Category has been added Successfully!')</script>";
        echo "<script>window.open('index.php?view_product_categories','_self')</script>";
    }
}
?>
<?php } ?>

