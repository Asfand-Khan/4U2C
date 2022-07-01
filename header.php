<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./index.css" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>4U2C</title>
</head>

<body>
  <div class="bg">
    <p>Home</p>
    <p>About</p>
    <p>Categories</p>
    <p>Privacy</p>
    <p>Return Policy</p>
    <p>Bussiness With Us</p>
    <p>Login</p>
    <p>Sign Up</p>
  </div>
  <nav class="navigation">
    <div>
      <h3 class="logo">4U2C</h3>
      <div class="searchcontainer">
        <input type="text" placeholder="Search in store" />
        <span><i class="fa-solid fa-magnifying-glass text-white"></i></span>
      </div>
      <div class="carticon"><i class="fa-solid fa-cart-shopping"></i></div>
    </div>
  </nav>
  <?php
  include('./carousel.php');
  include('./category.php');
  include('./product.php');
  ?>