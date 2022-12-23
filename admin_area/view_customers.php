<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>
  <!-- new order list start -->
  <div class="card border-primary mt-5 col-md-10">
    <h5 class="card-header text-center text-light"  style="background-color: rgb(82, 127, 250);"><i class="fa-solid fa-users pe-3"></i></i>Customers</h5>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>                    
                    <th scope="col">Customer ID</th>
                    <th scope="col">Customer Photo</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Email</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Customer Country</th>
                    <th scope="col">Customer City</th>
                    <th scope="col">Customer Address</th>
                    <th scope="col">Total Spending</th>
                    <th scope="col">Customer Edit</th>
                    <th scope="col">Customer Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                
                    $get_customer = "select * from customers";
                    $run_customer = mysqli_query($con,$get_customer);

                    while($row_customer = mysqli_fetch_array($run_customer)){
                        $customer_id = $row_customer['customer_id'];
                        $customer_title = $row_customer['customer_name'];
                        $customer_email = $row_customer['customer_email'];
                        $customer_contact = $row_customer['customer_contact'];
                        $customer_image = $row_customer['customer_image'];
                        $customer_country = $row_customer['customer_country'];
                        $customer_city = $row_customer['customer_city'];
                        $customer_address = $row_customer['customer_address'];
                        $i++;
                ?>
                <tr>

                    <th scope="row" class="ps-3"><?php echo $customer_id; ?></th>
                    <td><?php echo "<img src='../customer/customer_images/$customer_image' height='80px'>"; ?></td>
                    <td><?php echo $customer_title; ?></td>
                    <td><?php echo $customer_email; ?></td>
                    <td><?php echo $customer_contact; ?></td>
                    <td><?php echo $customer_country; ?></td>
                    <td><?php echo $customer_city; ?></td>
                    <td><?php echo $customer_address; ?></td>
                    <td class='text-danger'>Working on it</td>
                    <td><a href="index.php?edit_customer=<?php echo $customer_id; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                    <td><a href="index.php?delete_customer=<?php echo $customer_id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- new order list end -->
<?php } ?>