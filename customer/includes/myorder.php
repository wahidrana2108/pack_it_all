<table class="table table-bordered text-center">
    <thead>
      <tr>
        <th scope="col">#Order No</th>
        <th scope="col">Due Amount</th>
        <th scope="col">Invoice No</th>
        <th scope="col">Quantity</th>
        <th scope="col">Size</th>
        <th scope="col">Order Date</th>
        <th scope="col">Payment Status</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>

      <?php
        $customer_session = $_SESSION['customer_email'];
        $get_customer = "select * from customers where customer_email='$customer_session'";
        $run_customer = mysqli_query($con,$get_customer);
        $row_customer = mysqli_fetch_array($run_customer);
        $customer_id = $row_customer['customer_id'];
        $get_orders = "select * from customer_order where customer_id='$customer_id'";
        $run_orders = mysqli_query($con,$get_orders);
        $i = 0;
        while($row_orders = mysqli_fetch_array($run_orders)){
          $order_id = $row_orders['order_id'];
          $due_amount = $row_orders['due_ammount'];
          $invoice_no = $row_orders['invoice_no'];
          $qty = $row_orders['qty'];
          $size = $row_orders['size'];
          $order_date = substr($row_orders['order_date'],0,11);
          $order_status = $row_orders['order_status'];
          $i++;
          if($order_status == 'Pending'){
            $order_status = 'Unpaid';
          }
          else{
            $order_status = 'Paid';
          }
          echo "
          <tr>
            <th scope='row'>#$i</th>
            <td>$due_amount</td>
            <td>$invoice_no</td>
            <td>$qty</td>
            <td>$size</td>
            <td>$order_date</td>
            <td>$order_status</td>
            <td><a class='btn btn-primary' href='confirm.php?order_id=$order_id'><small>Confirm Payment</small></a></td>
          </tr>";
         } ?>
    </tbody>
  </table>