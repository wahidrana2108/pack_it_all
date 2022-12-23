<div class="">
  <form action="cart.php" method="post" enctype="multipart/form-data">
    <h1>Cart</h1>
    <?php
      $ip_add = getRealIpUser();
      $select_cart = "select * from cart where ip_add='$ip_add'";
      $run_cart = mysqli_query($con, $select_cart);
      $count = mysqli_num_rows($run_cart);
    ?>
    <p>You currently added <span class="fw-bolder">
        <?php echo $count; ?>
      </span> items in cart</p>
    <div class="row">
      <div class="col-sm-6 col-md-9">
        <table class="table table-striped table-hover text-center">
          <tr>
            <th>Product</th>
            <th>Unit</th>
            <th>Unit Price</th>
            <th>Size</th>
            <th>Delete</th>
            <th>Sub-Total</th>
          </tr>

          <?php
        $total = 0;
        $tax = 0;
        $final = 0;
        while($row_cart = mysqli_fetch_array($run_cart)){
          $pro_id = $row_cart['p_id'];
          $pro_size = $row_cart['size'];
          $pro_qty = $row_cart['qty'];

            $get_products = "select * from products where product_id='$pro_id'";
            $run_products = mysqli_query($con,$get_products);

            while($row_products = mysqli_fetch_array($run_products)){
              $product_title = $row_products['product_title'];
              $product_img1 = $row_products['product_img1'];
              $unit_price = $row_products['product_price'];
              $sub_total = $row_products['product_price']*$pro_qty;
              $total += $sub_total;
              $tax = ($total*5)/100;
              $final = $total+$tax;
        ?>


          <tr>
            <td><a href='details.php?pro_id=<?php echo $pro_id; ?>'><img style="width: 60px;" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="..."><br></a> <?php echo $product_title; ?>
            </td>
            <td>
              <h6>
                <?php echo $pro_qty; ?>
              </h6>
            </td>
            <td>
              <h6>৳
                <?php echo $unit_price; ?>
              </h6>
            </td>
            <td>
              <h6>
                <?php echo $pro_size; ?>
              </h6>
            </td>
            <td><input class="form-check-input" type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
            </td>
            <td>
              <h6>
                <?php echo $sub_total; ?>
              </h6>
            </td>
          </tr>
          <?php }} ?>
        </table>

      </div>
  </form>
  






  <div class="col-sm-6 col-md-3">
    <div class="card">
      <div class="card-body">
        <div style="background-color: rgb(224, 224, 224);">
          <h5 class="card-title text-center fw-bolder pt-3 pb-3">Order Summary</h5>
        </div>
        <h6>Order Sub-Total: <span class="justify-content-right fw-bolder">৳
            <?php echo $total; ?>
          </span></h6>
        <hr>
        <h6>Shipping Cost: <span class="justify-content-right fw-bolder">৳50</span></h6>
        <hr>
        <h6>Tax: <span class="justify-content-right fw-bolder">৳
            <?php echo $tax; ?>
          </span></h6>
        <hr>
        <h6 class="fw-bolder">Total: <span class="justify-content-end fw-bolder"> <span class="text-success">
              <?php echo $final; ?>
            </span></span></h6>
      </div>
    </div>
  </div>
</div>
<form  action="cart.php" method="post" enctype="multipart/form-data">
  <div class="mt-3">
    <a href="index.php" class="btn btn-secondary btn-sm mb-1" role="button"><i
        class="fa-solid fa-chevron-left me-1"></i>Continue Shopping</a>
    <div class="btn-group">
      <a name="remove" href="cart.php" class="btn btn-danger btn-sm mb-1" role="button"><i
          class="fa-solid fa-trash me-1"></i>Remove Item</a>
      <a href="mDetails.php" class="btn btn-success btn-sm mb-1" role="button"><i
          class="fa-solid fa-cart-shopping me-1"></i>Checkout</a>
    </div>
</form>
</div>
<?php        
    function update_cart(){
        global $con;
        if(isset($_POST['update'])){ 
            foreach($_POST['remove'] as $remove_id){
                $delete_product = "delete from cart where p_id='$remove_id'";
                $run_delete = mysqli_query($con,$delete_product);  
                if($run_delete){ 
                    echo "<script>window.open('cart.php','_self')</script>";                   
                    echo "<script>alert('Product removed!')</script>";                   
                }              
            }           
        }  
    }
    echo @$up_cart = update_cart(); 
  ?>





