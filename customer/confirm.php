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
            <input type="text" class="form-control" name="amount_sent" required>
        </div>
        <div class="form-group pt-2">
            <label>Select Payment Method:</label>
            <select class="form-select" aria-label="Default select example" required>
                <option selected disabled>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
        <div class="form-group pt-2">
            <label>Transaction/Reference ID:</label>
            <input type="number" class="form-control" name="c_address" required>
        </div>
        <div class="text-center mt-2">
            <button type="submit" name="login" value="login" class="btn btn-success"><i class="fa-sharp fa-solid fa-money-bill"></i> Confirm Payment</button>
        </div>
    </form>
</div>