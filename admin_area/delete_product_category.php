<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>

<?php 
        if(isset($_GET['delete_product_category'])){
            $delete_id = $_GET['delete_product_category'];
            $delete_product_category = "delete from products_categories where p_cat_id='$delete_id'";
            $run_delete = mysqli_query($con,$delete_product_category);
            if($run_delete){
                echo "<script>window.open('index.php?view_product_categories','_self')</script>";
                echo "<script>alert('Product Category Deleted Successfully!')</script>";
            }
        }
?>

<?php } ?>