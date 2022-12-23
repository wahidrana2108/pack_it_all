 <!-- navbar start -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Area</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i> <?php echo $admin_name; ?></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?user_profile=<?php echo $admin_id; ?>"><i class="fa-solid fa-user"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="index.php?view_products"><i class="fa-solid fa-message"></i> Products<span class="badge text-bg-secondary"><?php echo $count_products; ?></span></a></li>
                    <li><a class="dropdown-item" href="index.php?view_customers"><i class="fa-solid fa-user-group"></i> Customers<span class="badge text-bg-secondary"><?php echo $count_customers; ?></span></a></li>
                    <li><a class="dropdown-item" href="index.php?view_pro_cats"><i class="fa-solid fa-gear"></i> Product Catagories<span class="badge text-bg-secondary"><?php echo $count_product_category; ?></span></a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-power-off"></i> Log Out</a></li>
                  </ul>
                </li>
                <li class="nav-item ps-5"></li>
                <li class="nav-item ps-5"></li>
                <li class="nav-item ps-5"></li>
              </ul>
        </div>

    </div>
</nav>
<!-- navbar end -->