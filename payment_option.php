<!-- contract form start -->
<div class="mt-3 d-flex justify-content-center">
    <div class="col-md-10">
            <?php
                $session_email = $_SESSION['customer_email'];
                $select_customer = "select * from customers where customer_email='$session_email'";
                $run_customer = mysqli_query($con,$select_customer);
                $row_customer = mysqli_fetch_array($run_customer);
                $customer_id = $row_customer['customer_id'];
            ?>

            <h3 class="text-center">Please choose a Payment Method</h3>
            <p class="text-center">All available payment methods</p>
            <h4 class="text-center text-success">Interested in Offline<a class="text-decoration-none" href="order.php?c_id=<?php echo $customer_id ?>"><small><i> click here</i></small></a></h4><br>
            <div class="online">
                <h4 class="text-center text-success">Online Method</h4><br>
                <div class="row">
                    <div class="col  d-flex justify-content-center mb-4"><a href=""><img src="admin_area/admin_images/paypal.png" alt="" srcset="" style="width: 200px;"></a></div>
                    <div class="col  d-flex justify-content-center mb-4"><a href=""><img src="admin_area/admin_images/paypal.png" alt="" srcset="" style="width: 200px;"></a></div>
                    <div class="col  d-flex justify-content-center mb-4"><a href=""><img src="admin_area/admin_images/paypal.png" alt="" srcset="" style="width: 200px;"></a></div>
                    <div class="col  d-flex justify-content-center mb-4"><a href=""><img src="admin_area/admin_images/paypal.png" alt="" srcset="" style="width: 200px;"></a></div>
                    <div class="col  d-flex justify-content-center mb-4"><a href=""><img src="admin_area/admin_images/paypal.png" alt="" srcset="" style="width: 200px;"></a></div>
                    <div class="col  d-flex justify-content-center mb-4"><a href=""><img src="admin_area/admin_images/paypal.png" alt="" srcset="" style="width: 200px;"></a></div>
                </div>
            </div>
    </div>
</div>
<!-- contract form start -->
