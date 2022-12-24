<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>
  <!-- new order list start -->
  <div class="card border-primary mt-5 col-md-10">
    <h5 class="card-header text-center text-light"  style="background-color: rgb(82, 127, 250);"><i class="fa-solid fa-list pe-3"></i></i>Orders</h5>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>                    
                    <th scope="col">Order ID</th>
                    <th scope="col">Invoice No</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Customer Email</th>
                    <th scope="col"> Delivery Address</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Edit Order</th>
                    <th scope="col">Delete Order</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                
                    $get_order = "select * from pending_orders";
                    $run_order = mysqli_query($con,$get_order);

                    while($row_order = mysqli_fetch_array($run_order)){
                        $order_id = $row_order['order_id'];
                        $invoice_no = $row_order['invoice_no'];
                        $order_status = $row_order['order_status'];
                        $customer_id = $row_order['customer_id'];

                        $i++;
                ?>
                <tr>

                    <th scope="row" class="ps-3"><?php echo $order_id; ?></th>
                    <td><?php echo $invoice_no; ?></td>
                    <?php 
                        $get_customer = "select * from customers where customer_id='$customer_id'";
                        $run_customer = mysqli_query($con,$get_customer);
                        $row_customer = mysqli_fetch_array($run_customer);
                        $c_id = $row_customer['customer_id'];
                        $customer_title = $row_customer['customer_name'];
                        $customer_address = $row_customer['customer_address'];
                        $customer_city = $row_customer['customer_city'];
                        $customer_country = $row_customer['customer_country'];
                        $customer_email = $row_customer['customer_email'];
                        $customer_contact = $row_customer['customer_contact'];

                        echo"
                        <td>$customer_title</td>
                        <td>$customer_contact</td>
                        <td>$customer_email</td>
                        <td>$customer_address ,$customer_city, $customer_country</td>
                        <td class='text-danger'>Working on it</td>
                        <td>$order_status</td>
                        ";                       
                    ?>
                    <td><a href="index.php?edit_order=<?php echo $order_id; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                    <td><a href="index.php?delete_order=<?php echo $order_id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- new order list end -->
<?php } ?>