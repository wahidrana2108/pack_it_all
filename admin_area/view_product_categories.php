<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>
  <!-- new order list start -->
  <div class="card border-primary mt-5 col-md-10">
    <h5 class="card-header text-center text-light"  style="background-color: rgb(82, 127, 250);"><i class="fa-solid fa-list pe-3"></i></i>Product Categories</h5>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Category ID</th>
                    <th scope="col">Category Title</th>
                    <th scope="col">Category Description</th>
                    <th scope="col">Category Edit</th>
                    <th scope="col">Category Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 0;
                
                    $get_p_cat = "select * from products_categories";
                    $run_p_cat = mysqli_query($con,$get_p_cat);

                    while($row_p_cat = mysqli_fetch_array($run_p_cat)){
                        $p_cat_id = $row_p_cat['p_cat_id'];
                        $p_cat_title = $row_p_cat['p_cat_title'];
                        $p_cat_desc = $row_p_cat['p_cat_desc'];
                        $i++;
                ?>
                <tr>

                    <th scope="row" class="ps-3"><?php echo $p_cat_id; ?></th>
                    <td><?php echo $p_cat_title; ?></td>
                    <td><?php echo $p_cat_desc; ?></td>
                    <td><a href="index.php?edit_product_category=<?php echo $p_cat_id; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                    <td><a href="index.php?delete_product_category=<?php echo $p_cat_id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- new order list end -->
<?php } ?>