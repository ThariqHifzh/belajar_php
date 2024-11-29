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
    $jenis_kelamin          = $_POST['jenis_kelamin'];
    $telepon                = $_POST['telepon'];

    $insert = mysqli_query($koneksi, "INSERT INTO user
    (nama,jenis_kelamin,telepon)
    VALUES ('$nama','$jenis_kelamin','$telepon')");
    if (!$insert) {
        echo 'gagal';
    } else {
        echo 'berhasil';
        header("Location: 5.php?tambah-user=berhasil");
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");
    header("location:5.php?hapus=berhasil");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $queryEdit = mysqli_query($koneksi, "SELECT * FROM user WHERE id
    ='$id'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);
}

if(isset($_POST['edit'])){
    $nama                   = $_POST['nama'];
    $jenis_kelamin          = $_POST['jenis_kelamin'];
    $telepon                = $_POST['telepon'];
    $id                     = $_GET['edit'];

    $update = mysqli_query($koneksi, "UPDATE user SET nama='$nama',
    jenis_kelamin='$jenis_kelamin',telepon='$telepon' WHERE id='$id'");
    header("location:5.php?update=berhasil");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <h1><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> User</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Masukan nama Anda"
                value="<?php echo isset($_GET['edit']) ? $rowEdit['nama'] : '' ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <br>
            <input <?php echo isset($_GET['edit']) ? ($rowEdit['jenis_kelamin'] == "Laki-laki") ? 'checked' : '' : '' ?>
                type="radio" name="jenis_kelamin" value="Laki-Laki">
            Laki-Laki
            <br>
            <input <?php echo isset($_GET['edit']) ? ($rowEdit['jenis_kelamin'] == "Perempuan") ? 'checked' : '' : '' ?>
                type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            <br>
            <div class="form-group">
                <br>
                <label for="">Telp</label>
                <input type="text" name="telepon" placeholder="Masukan Telepon Anda"
                    value="<?php echo isset($_GET['edit']) ? $rowEdit['telepon'] : '' ?>">
            </div>
            <br>
            <button type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>">Simpan</button>
    </form>
</body>

</html>