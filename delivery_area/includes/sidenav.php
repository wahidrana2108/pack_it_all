<?php
    if(!isset($_SESSION['rider_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>

<ul class="navbar-nav navbar-dark bg-dark ps-3 pe-3 vh-100">
    <li class="nav-item "><a class="nav-link active text-light" aria-current="page" href="index.php?profile"><i class="fa-solid fa-gauge pe-3"></i> Profile</a></li>

    <li class="nav-item "><a class="nav-link active text-light" aria-current="page" href="index.php?view_payments"><i class="fa-solid fa-money-bill pe-3"></i> View Deliveries</a></li>

    <li class="nav-item mb-5"><a class="nav-link active text-light" aria-current="page" href="logout.php"><i class="fa-solid fa-power-off pe-3"></i> Log Out</a></li>
</ul>

<?php } ?>