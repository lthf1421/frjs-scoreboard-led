
<?php
    require "session.php";
    require "../koneksi.php";
    
    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">

</head>

<style>

    .summary-produk{
        background-color: #9eb99b;
        border-radius: 15px;
    }
    
    .no-decoration{
        text-decoration: none;
    }
</style>

<body>
    <?php require "navbar.php";?>
    <div class="container mt-5"> 
            <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
            <i class="fas fa-home"></i>
            Home
            </li>
        </ol>
        </nav>
    <h2>
        Halo, <?php echo $_SESSION['username'] ?>
    </h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 kotak shadow summary-produk p-3">
                <div class="row">
                    <div class="col-6">
                    <i class="fas fa-box fa-10x text-black-50"></i>
                </div>
                <div class="col-6 text-white">
                    <h3 class="fs-2">Produk</h3>
                    <p class="fs-4"><?php echo $jumlahProduk ?> Produk</p>
                    <p>
                        <a href="produk.php" class="text-white btn btn-success no-decoration fs-4">Lihat Detail</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../fontawesome/js/all.min.js"></script>

</body>

</html>