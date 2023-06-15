<?php
  require "koneksi.php";

  $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail, ketersediaan_stok FROM produk LIMIT 3");
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
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#menu">Catalogue</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        </form>
        <a href="catalogue.php" id="catalogue"
          ><i data-feather="book-open"></i
        ></a>
        
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- navbar end -->

    <!-- hero section start-->

    <section class="hero" id="home">
      <main class="content">
        <h1>Custom <span>Scoreboard, Running Text & Jam Digital</span></h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusiantum,
          enim.
        </p>
        <a href="#" class="cta">Pesan Sekarang</a>
      </main>
    </section>

    <!-- hero section end-->

    <!-- about section start-->

    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="image/tentang-kami.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa memilih kami?</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo,
            voluptatum? Accusantium incidunt perferendis facilis laboriosam. Qui
            quos autem consectetur corporis sequi tempore.
          </p>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo,
            voluptatum? Accusantium incidunt perferendis facilis laboriosam. Qui
            quos autem consectetur corporis sequi tempore
          </p>
        </div>
      </div>
    </section>

    <!-- about section end-->

    <!-- menu section start -->

    <section id="menu" class="menu">
      <h2>Featured<span> Product</span></h2>

      <div class="row">
        <?php
          while($data = mysqli_fetch_array($queryProduk)){
        ?>
          <div class="menu-card">
            <div class="image-box">
              <img src="image/<?php echo $data['foto'];?>" alt="Scoreboard Basket" />
            </div>
            <h3 class="menu-card-tittle"><?php echo $data['nama']; ?></h3>
            <p class="menu-card-desc crop">
              <?php echo $data['detail']; ?>
            </p>
            <p class="menu-card-price">Rp <?php echo $data['harga']; ?></p>
            <a href="">
            <a href="#" class="cta">
                  <?php echo $data['ketersediaan_stok'];?> 
            </a>
          </div>
          <?php
          }
        ?>
      </div>
        

      </div>

      <div class="load-more">
        <a href="catalogue.php" class="btn">Full Catalogue >>></a>
      </div>
    </section>

    <!-- menu section end -->

    <!-- kontak section start -->

    <section id="contact" class="contact">
      <h2>Reach <span>Us</span></h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,
        odit!
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6946472080144!2d106.85877551413715!3d-6.171623962196151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f506393c48b1%3A0xe8dc439c3edd9f4b!2sScoreboard%20%26%20LED%20Display!5e0!3m2!1sen!2sid!4v1679825900376!5m2!1sen!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <button type="submit" class="btn">kirim pesan</button>
        </form>
      </div>
    </section>

    <!-- kontak section end -->

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
