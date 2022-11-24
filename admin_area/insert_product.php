<?php
include("includes/db.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product - Admin</title>
    <link rel="icon" type="image/x-icon" href="admin_images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/fedd93fc11.js" crossorigin="anonymous"></script>
    <script src="js/tinymce/js/tinymce/tinymce.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-md-12 mt-3">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php"><i class="fa-solid fa-gauge"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Insert Product</li>
            </ul>
        </div>

        <form>
            <legend>Disabled fieldset example</legend>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="" placeholder="Enter Product Title" required>
                <label for="">Enter Product Title</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="" aria-label="" required>
                    <option selected disabled>Select Category</option>
                    <option value="1">Men</option>
                    <option value="2">Women</option>
                    <option value="3">Kids</option>
                    <option value="3">Other</option>
                </select>
                <label for="">Select Product Category</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="" aria-label="" required>
                    <option selected disabled>Select Category</option>
                    <option value="1 select">T-Shirt</option>
                    <option value="2">Jacket</option>
                    <option value="3">Coat</option>
                    <option value="3">Shoe</option>
                    <option value="3">Accessories</option>
                </select>
                <label for="">select Category</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="" aria-label="" required>
                    <option selected disabled>Select Size</option>
                    <option value="1">Small</option>
                    <option value="2">Medium</option>
                    <option value="3">Large</option>
                    <option value="3">Extra Large</option>
                </select>
                <label for="">Select Size</label>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Product Image 1:</label>
                <input type="file" class="form-control" id="" aria-describedby="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Product Image 2:</label>
                <input type="file" class="form-control" id="" aria-describedby="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Product Image 3:</label>
                <input type="file" class="form-control" id="" aria-describedby="" required>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="" placeholder="Enter Product Price" required>
                <label for="">Enter Price</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="" style="height: 100px"
                    required></textarea>
                <label for="">Enter Description</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>












</body>

</html>