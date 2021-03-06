<?php
  ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--owl carousel cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--custom stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap style-->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

    <!--Bootstrap && jquery script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!--owl carouseljs-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!--jquery isotope-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
    <!--custom js-->
    <script src="index.js"></script>

    <!--header-->
    <header>
        <div class="d-flex justify-content-between px-4 py-1 bg-light">
            <p class="text-black-20 font-rale text-black-50 font-size-12 m-0">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </p>
            <div class="font-rale font-size-14">
                <a href="" class="px-3 border-right border-left text-dark">Login</a>
                <a href="" class="px-3 border-right text-dark">Wishlist(0)</a>
            </div>
        </div>

        <!--primary navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <a class="navbar-brand" href="#">Mobile Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                  <a class="nav-link" href="#">On Sale<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                  </li>
              </ul>
              <form action="">
                  <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                      <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                      <span class="px-3 py-2 text-dark rounded-pill bg-light"><?php echo count($product->getData('cart')) ?? '0' ?></i></span>
                  </a>
              </form>
            </div>
          </nav>
        <!--/primary navigation-->

    </header>
    <!--/header-->

    <!--main site-->
    <main>