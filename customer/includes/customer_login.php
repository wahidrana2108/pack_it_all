<h1 class="text-center">LOGIN</h1>
<form action="checkout.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Email Address</label>
        <input type="email" class="form-control" name="c_email" required>
    </div>
    <div class="form-group">
        <label>Enter Password</label>
        <input type="password" class="form-control" name="c_pass" required>
    </div>
    <div class="text-center mt-2">
        <button type="submit" name="login" value="login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
    </div>
    <small class="fw-bolder"><i>Forgot Password? <a href="customer_register.php">Click here</a></i></small><br>
    <small class="fw-bolder"><i>Don't have an account? <a href="customer_register.php">Click here</a></i></small>
</form>


<?php 

if(isset($_POST['login'])){   
    $customer_email = $_POST['c_email'];  
    $customer_pass = $_POST['c_pass'];   
    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";    
    $run_customer = mysqli_query($con,$select_customer);    
    $get_ip = getRealIpUser();   
    $check_customer = mysqli_num_rows($run_customer);    
    $select_cart = "select * from cart where ip_add='$get_ip'";    
    $run_cart = mysqli_query($con,$select_cart);   
    $check_cart = mysqli_num_rows($run_cart);    
    if($check_customer==0){    
        echo "<script>alert('Your email or password is wrong!')</script>";      
        exit();   
    }
    
    if($check_customer==1 AND $check_cart==0){
        $_SESSION['customer_email']=$customer_email;        
             
       echo "<script>window.open('shop.php','_self')</script>";
       echo "<script>alert('You are Logged in Successfully!')</script>";          
    }else{        
        $_SESSION['customer_email']=$customer_email; 
       echo "<script>window.open('customer/myAccount.php','_self')</script>";
       echo "<script>alert('You are Logged in Successfully!')</script>";        
    }   
}
?>