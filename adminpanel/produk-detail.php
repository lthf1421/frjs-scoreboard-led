<?php
    require "session.php";
    require "../koneksi.php";

    $id = $_GET['p'];

    $query = mysqli_query($con, "SELECT * FROM produk WHERE id='$id'");
    $data = mysqli_fetch_array($query);

    
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Detail</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

</head>

<style>
    form div{
        margin-bottom: 10px;
    }
</style>

<body>
    <?php require "navbar.php";?>

    <div class="container mt-5">
        <h2>Detail Produk</h2>

        <div class="col-12 col-md-6 mb-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data['nama'];?>" autocomplete="off" required>
                </div>
                <div>
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" value="<?php echo $data['harga']; ?>"
                    name="harga" required>
                </div>
                <div>
                    <label for="currentFoto">Foto awal produk =</label>
                    <img src="../image/<?php echo $data['foto'] ?>" alt="" width="300px">
                </div>
                <div>
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div>
                    <label for="detail">Detail</label>
                    <textarea name="detail" id="detail" cols="30" rows="10" class="form-control">
                        <?php echo $data['detail']?>
                    </textarea>
                </div>
                <div>
                    <label for="ketersediaan_stok">Ketersediaan Stok</label>
                    <select name="ketersediaan_stok" id="ketersediaan_stok" class="form-control">
                        <option value="<?php echo $data['ketersediaan_stok'] ?>"><?php echo $data['ketersediaan_stok'] ?></option>
                        <?php
                            if($data['ketersediaan_stok']=='pre-order'){
                        ?>
                            <option value="ready stock">ready stok</option>
                        <?php
                            }
                            else{
                        ?>
                            <option value="pre-order">pre-order</option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary mt-3" name="simpan">Simpan</button>
                    <button type="submit" class="btn btn-danger mt-3" name="hapus">Hapus Produk</button>
                </div>
            </div>

            </form>
            <?php
                if(isset($_POST['simpan'])){
                    $nama = htmlspecialchars($_POST['nama']);
                    $harga = htmlspecialchars($_POST['harga']);
                    $detail = htmlspecialchars($_POST['detail']);
                    $ketersediaan_stok = htmlspecialchars($_POST['ketersediaan_stok']);

                    $target_dir = "../image/";
                    $nama_file = basename($_FILES["foto"]["name"]);
                    $target_file = $target_dir . $nama_file;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $image_size = $_FILES["foto"]["size"];
                    $random_name = generateRandomString(20);
                    $new_name = $random_name . "." . $imageFileType;

                    if($nama=='' || $harga=='') {
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Nama dan Harga wajib diisi
                        </div>
                    <?php
                    }
                    else{
                        $queryUpdate = mysqli_query($con, "UPDATE produk SET nama='$nama', harga='$harga', detail='$detail',
                        ketersediaan_stok='$ketersediaan_stok' WHERE id=$id");

                        if($nama_file!=''){
                            if($image_size > 5000000){
                    ?>
                                <div class="alert alert-warning mt-3" role="alert">
                                     Foto tidak boleh lebih dari 5mb                    
                                </div>
                    <?php
                            }
                            else{
                                if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'gif' ){
                    ?>
                                <div class="alert alert-warning mt-3" role="alert">
                                     Format file harus jpg, png atau gif                   
                                </div>
                    <?php
                                }
                                else{
                                    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $new_name);

                                    $queryUpdate = mysqli_query($con, "UPDATE produk SET
                                    foto='$new_name' WHERE id='$id'");

                                    if($queryUpdate){
                    ?>
                                    <div class="alert alert-primary mt-3" role="alert">
                                        Produk berhasil diupdate                 
                                    </div>

                                    <meta http-equiv="refresh" content="2"; url="adminpanel/produk.php"; />

                    <?php   
                                    }
                                    else{
                                        echo mysqli_error($con);
                                    }
                                }
                            }
                        }
                    }
                }

                if(isset($_POST['hapus'])){
                    $queryHapus = mysqli_query($con, "DELETE FROM produk WHERE id='$id'");

                    if($queryHapus){
                ?>
                        <div class="alert alert-primaty mt-3" role="alert">
                            Produk berhasil dihapus
                        </div>

                        <meta http-equiv="refresh" content="2; url=produk.php" />
                <?php
                    }
                }
            ?>
        </div>
    </div>


<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>