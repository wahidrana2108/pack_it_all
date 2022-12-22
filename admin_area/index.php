<?php include('includes/header.php'); ?>
    
    <div class="row">
        <!-- sidebar start -->
        <div class="col-md-2">
            <?php include('includes/sidenav.php'); ?>
        </div>
        <!-- sidebar end -->



        <!-- dashboard start -->
        <div class="col-md-10">
            <?php 
                if(!isset($_GET['dashboard'])){
                    include("dashboard.php");
                }
        ?> 
        </div>
        <!-- dashboard end -->
    </div>
    

<?php include('includes/footer.php'); ?>