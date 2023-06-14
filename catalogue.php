<?php
  require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FRJS Scoreboard & LED display</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo"
        >FRJS<span> Scoreboard & LED display</span></a
      >

      <div class="navbar-nav">
        <a href="index.html">Home</a>
        <a href="index.html#about">About Us</a>
        <a href="index.html#menu">Catalogue</a>
        <a href="index.html#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="catalogue.html" id="catalogue"
          ><i data-feather="book-open"></i
        ></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- navbar end -->

    <main>
      <section id="catalogue" class="menu">
        <h2>Our<span> Product</span></h2>

        <div class="row">
          <div class="menu-card">
            <img src="img/menu/sc.png" alt="Scoreboard Basket" />
            <h3 class="menu-card-tittle">Score Board Basket</h3>
            <p class="menu-card-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing.
            </p>
            <p class="menu-card-price">IDR 14.000.000</p>
          </div>
          <div class="menu-card">
            <img src="img/menu/sc.png" alt="Scoreboard Basket" />
            <h3 class="menu-card-tittle">Score Board Basket</h3>
            <p class="menu-card-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing.
            </p>
            <p class="menu-card-price">IDR 14.000.000</p>
          </div>
          <div class="menu-card">
            <img src="img/menu/sc.png" alt="Scoreboard Basket" />
            <h3 class="menu-card-tittle">Score Board Basket</h3>
            <p class="menu-card-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing.
            </p>
            <p class="menu-card-price">IDR 14.000.000</p>
          </div>
        </div>
      </section>

      <!-- menu section end -->
    </main>

    <!-- Footer start -->

    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i> </a>
        <a href="#"><i data-feather="facebook"></i> </a>
        <a href="#"><i data-feather="message-circle"></i> </a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="credit">
        <p>
          Created by
          <a href="https://vsco.com/luthfi4517">Nabhan Luthfidyah</a>. | &copy
          2023.
        </p>
      </div>
    </footer>

    <!-- Footer end -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- my Javascript-->
    <script src="js/script.js"></script>
  </body>
</html>
