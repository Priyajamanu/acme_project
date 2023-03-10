<?php
include('includes/connect.php');
include('functions/common_function.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <style>
      .cart_img{
    width: 80px;
    height: 80px;

}
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
              <img src="./images/logo.jpg" alt="" class = "logo">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="display_all.php">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?phpcart_item();?></sup></a>
                  </li>   
                </ul>
               
              </div>
            </div>
          </nav>

          <?php
            cart();
          ?>

          <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a href="#" class="nav-link">Welcome Guest</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Login</a>
              </li>
            </ul>

          </nav>

          <div class="bg-light">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Communication is at the heart of e-commerce and community</p>
          </div>

          <div class="container">
            <div class="row">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Product Image</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                            <th colspan="2">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Apple</td>
                            <td><img src="./images/apple.jpg" alt="" class="cart_img"></td>
                            <td><input type="text" name="" id=""></td>
                            <td>9000</td>
                            <td><input type="checkbox"></td>
                            <td>
                                <button class="bg-success px-3 py-2 border-0 mx-3">Update</button>
                                <button class="bg-success px-3 py-2 border-0 mx-3">Remove</button>
                            </td>

                        </tr>
                    </tbody>
                </table>

                <div class = "d-flex mb-5">
                    <h4 class="px-3">Subtotal: <strong class = "text-success">5000/-</strong></h4>
                    <a href="home.php"><button class="bg-success px-3 py-2 mx-3 border-0">Continue Shopping</button></a>
                    <a href="#"><button class="bg-secondary p-3 py-2 border-0 text-light">Checkout</button></a>
                </div>
            </div>
          </div>

          <?php
          include("./includes/footer.php");
          ?>
    </div>
</body>
</html>