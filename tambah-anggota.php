<?php
$host_koneksi = "localhost";
$username_koneksi = "root";
$password_koneksi = "";
$database_koneksi = "angkatan3_belajar";

$koneksi = mysqli_connect($host_koneksi, $username_koneksi, $password_koneksi, $database_koneksi);

if (!$koneksi) {
    echo "Koneksi Gagal";
}

// insert user
if (isset($_POST['simpan'])) {
    $nama                   = $_POST['nama'];
    $telepon                = $_POST['telepon'];
    $email                  = $_POST['email'];
    $alamat                 = $_POST['alamat'];

    $insert = mysqli_query($koneksi, "INSERT INTO anggota(nama_anggota,telepon,email,alamat)VALUES ('$nama','$telepon','$email','$alamat')");
    if (!$insert) {
        echo 'gagal';
    } else {
        echo 'berhasil';
        header("Location: anggota.php?tambah-anggota=berhasil");
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi, "DELETE FROM anggota WHERE id='$id'");
    header("location:anggota.php?hapus=berhasil");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $queryEdit = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id
    ='$id'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);
}

if (isset($_POST['edit'])) {
    $nama                   = $_POST['nama'];
    $telepon                = $_POST['telepon'];
    $email                  = $_POST['email'];
    $alamat                 = $_POST['alamat'];

    $update = mysqli_query($koneksi, "UPDATE anggota SET nama_anggota='$nama',
    telepon='$telepon',email='$email',alamat='$alamat' WHERE id='$id'");
    header("location:anggota.php?update=berhasil");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota</title>
</head>

<body>
    <h1><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Anggota</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama Anggota</label>
            <input type="text" name="nama" placeholder="Masukan nama Anda"
                value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_anggota'] : '' ?>">
        </div>
        <div class="form-group">
            <br>
            <label for="">Telepon</label>
            <input type="text" name="telepon" placeholder="Masukan Telepon Anda"
                value="<?php echo isset($_GET['edit']) ? $rowEdit['telepon'] : '' ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Masukan email Anda"
                value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" placeholder="Masukan alamat"
                value="<?php echo isset($_GET['edit']) ? $rowEdit['alamat'] : '' ?>">
        </div>
        <br>
        <button type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>">Simpan</button>
    </form>
</body>

</html>