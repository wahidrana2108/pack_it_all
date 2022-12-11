<!-- navbar start -->
<?php
    $active='My Account';
    include("includes/navbar.php");
?>

<?php
    if(!isset($_SESSION['customer_email'])){
        echo "<script>window.open('checkout.php','_self')</script>";
    }
    else{
        if(isset($_GET['order_id'])){
            $order_id = $_GET['order_id'];
        }
    }
?>

<!-- navbar end -->
<div class="container col-md-6">
<h1 class="text-center">Confirm Order</h1>
    <form action="checkout.php?update='<?php echo $order_id; ?>'" method="post" enctype="multipart/form-data">
        <div class="form-group pt-2">
            <label>Invoice No:</label>
            <input type="number" class="form-control" name="invoice_no" required>
        </div>
        <div class="form-group pt-2">
            <label>Amount Sent:</label>
            <input type="number" class="form-control" name="amount_sent" required>
        </div>
        <div class="form-group pt-2">
            <label>Select Payment Method:</label>
            <select name="payment_mode" class="form-select" aria-label="Default select example" required>
                <option selected disabled>Open this select menu</option>
                <option value="b-kash">B-kash</option>
                <option value="rocket">Rocket</option>
                <option value="nogod">Nogod</option>
                <option value="paypal">Paypal</option>
                <option value="master">Master Card</option>
                <option value="visa">Visa Card</option>
              </select>
        </div>
        <div class="form-group pt-2">
            <label>Transaction/Reference ID:</label>
            <input type="number" class="form-control" name="ref_no" required>
        </div>
        <div class="form-group pt-2">
            <label>OTP:</label>
            <input type="number" class="form-control" name="code" required>
        </div>
        <div class="form-group pt-2">
            <label>Transaction/Reference ID:</label>
            <input type="date" class="form-control" name="date" required>
        </div>
        <div class="text-center mt-2">
            <button type="submit" name="login" value="login" class="btn btn-success"><i class="fa-sharp fa-solid fa-money-bill"></i> Confirm Payment</button>
        </div>
    </form>
    <?php
        if(isset($_POST['confirm_payment'])){
            $update_id = $_GET['update_id'];
            $invoice_no = $_POST['invoice_no'];
            $amount = $_POST['amount_sent'];
            $payment_mode = $_POST['payment_mode'];
            $ref_no = $_POST['ref_no'];
            $code = $_POST['code'];
            $payment_date = $_POST['date'];
            $complete = "Complete";
            $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount_sent','$payment_mode','$ref_no','$code','$date')";
            $run_payment = mysqli_query($con,$insert_payment);

            $update_customer_order = "update customer_order set order_status='complete' where order_id='$update_id'";
            $run_customer_order = mysqli_query($con,$update_customer_order);
            $update_pending_order = "update pending_orders set order_status='complete' where order_id='$update_id'";
            $run_pending_order = mysqli_query($con,$update_pending_order);
        }
    ?>
</div>