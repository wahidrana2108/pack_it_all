<?php
    if(!isset($_SESSION['rider_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>

<?php 
        if(isset($_GET['update_delivery'])){
            $Delivered= 'Delivered';
            $update_id = $_GET['update_delivery'];
            $update_delivery = "update pending_orders set order_status='$Delivered' where order_id='$update_id'";
            $run_update = mysqli_query($con,$update_delivery);
            if($run_update){
                echo "<script>window.open('index.php?view_payments','_self')</script>";
                echo "<script>alert('Product Deleted Successfully!')</script>";
            }
        }
?>

<?php } ?>