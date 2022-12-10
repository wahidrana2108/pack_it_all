<?php
    $active='My Account';
      if(isset($_SESSION['customer_email'])){
      echo "<script>window.open('../checkout.php','_self')</script>";
    }
    else{
      include('includes/navbar.php');
      $customer_session = $_SESSION['customer_email'];
      $get_customer = "select * from customers where customer_email='$customer_session'";
      $run_customer = mysqli_query($con,$get_customer);
      $row_customer = mysqli_fetch_array($run_customer);
      $customer_image = $row_customer['customer_image'];
      $customer_name = $row_customer['customer_name'];

      if(!isset($_SESSION['customer_email'])){
      }
      else{
        echo " 
              <div class='container'>
                <div class='d-flex align-items-start'>
                    <div class='nav flex-column nav-pills me-3' id='v-pills-tab' role='tablist' aria-orientation='vertical'>
                      <button class='nav-link' id='v-pills-disabled-tab' data-bs-toggle='pill' data-bs-target='#v-pills-disabled' type='button' role='tab' aria-controls='v-pills-disabled' aria-selected='false' disabled>
                        <div class='card' style='width: 8rem;'>
                            <img src='customer_images/$customer_image' class='card-img-top' alt='...'>
                            <div class='card-body'>
                              <p class='card-text fw-bolder'>$customer_name</p>
                            </div></div>
                      </button>
      ";
    } 
  }
?>
                  <button class='nav-link active' id='v-pills-home-tab' data-bs-toggle='pill' data-bs-target='#v-pills-home' type='button' role='tab' aria-controls='v-pills-home' aria-selected='true'><i class='fa-solid fa-list'></i> My Order</button>
                  <button class='nav-link' id='v-pills-profile-tab' data-bs-toggle='pill' data-bs-target='#v-pills-profile' type='button' role='tab' aria-controls='v-pills-profile' aria-selected='false'><i class='fa-solid fa-money-check-dollar'></i> Pay Offline</button>
                  <button class='nav-link' id='v-pills-messages-tab' data-bs-toggle='pill' data-bs-target='#v-pills-messages' type='button' role='tab' aria-controls='v-pills-messages' aria-selected='false'><i class='fa-solid fa-pen-to-square'></i> Edit Account</button>
                  <button class='nav-link' id='v-pills-settings-tab' data-bs-toggle='pill' data-bs-target='#v-pills-settings' type='button' role='tab' aria-controls='v-pills-settings' aria-selected='false'><i class='fa-solid fa-user'></i> Edit Password</button>
                  <button class='nav-link' id='v-pills-settings-tab' data-bs-toggle='pill' data-bs-target='#v-pills-settings' type='button' role='tab' aria-controls='v-pills-settings' aria-selected='false'><i class='fa-solid fa-trash'></i> Delete Account</button>
                </div>
                <div class='tab-content mt-2' id='v-pills-tabContent'>
                  <div class='tab-pane fade show active' id='v-pills-home' role='tabpanel' aria-labelledby='v-pills-home-tab' tabindex='0'> <?php include('includes/myorder.php') ?></div>
                  <div class='tab-pane fade' id='v-pills-profile' role='tabpanel' aria-labelledby='v-pills-profile-tab' tabindex='0'> <?php include('includes/Offline_pay.php') ?></div>
                  <div class='tab-pane fade' id='v-pills-disabled' role='tabpanel' aria-labelledby='v-pills-disabled-tab' tabindex='0'>...</div>
                  <div class='tab-pane fade' id='v-pills-messages' role='tabpanel' aria-labelledby='v-pills-messages-tab' tabindex='0'>...</div>
                  <div class='tab-pane fade' id='v-pills-settings' role='tabpanel' aria-labelledby='v-pills-settings-tab' tabindex='0'>...</div>
                </div>
            </div>
          </div>
        </div>

<?php include('includes/footer.php'); ?>