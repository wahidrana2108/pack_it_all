<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>
  <!-- new order list start -->
  <div class="card border-primary mt-5 col-md-10">
    <h5 class="card-header text-center text-light"  style="background-color: rgb(82, 127, 250);"><i class="fa-solid fa-list pe-3"></i></i>Products</h5>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Title</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Sold</th>
                    <th scope="col">Product Keywords</th>
                    <th scope="col">Product Date</th>
                    <th scope="col">Product Edit</th>
                    <th scope="col">Product Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                
                    $get_pro = "select * from products";
                    $run_pro = mysqli_query($con,$get_pro);

                    while($row_pro = mysqli_fetch_array($run_pro)){
                        $pro_id = $row_pro['product_id'];
                        $pro_title = $row_pro['product_title'];
                        $pro_img1 = $row_pro['product_img1'];
                        $pro_price = $row_pro['product_price'];
                        $pro_key = $row_pro['product_keyword'];
                        $pro_date = $row_pro['date'];
                        $i++;
                ?>
                <tr>

                    <th scope="row" class="ps-3"><?php echo $pro_id; ?></th>
                    <td><?php echo $pro_title; ?></td>
                    <td><?php echo "<img src='product_images/$pro_img1' height='80px'>"; ?></td>
                    <td>৳<?php echo $pro_price; ?></td>
                    <td>
                        <?php
                            $get_sold = "select * from pending_orders where product_id='$pro_id'";
                            $run_sold = mysqli_query($con,$get_sold);
                            $count_sold = mysqli_num_rows($run_sold);
                            echo $count_sold;
                        ?>
                    </td>
                    <td><?php echo $pro_key; ?></td>
                    <td><?php echo $pro_date; ?></td>
                    <td><a href="index.php?edit_product=<?php echo $pro_id; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                    <td><a href="index.php?delete_product=<?php echo $pro_id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- new order list end -->
<?php } ?>