<?php
$host_koneksi = "localhost";
$username_koneksi = "root";
$password_koneksi = "";
$database_koneksi = "angkatan3_belajar";

$koneksi = mysqli_connect($host_koneksi, $username_koneksi, $password_koneksi, $database_koneksi);

if (!$koneksi) {
    echo "Koneksi Gagal";
}

// select user
$query = mysqli_query($koneksi, "SELECT * FROM anggota ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota</title>
</head>

<body>
    <h1>Data Anggota</h1>
    <?php if (isset($_GET['tambah'])) { ?>
    <div class="alert-warning">Data Berhasil Ditambah
    </div>
    <?php } ?>
    <div align="right">
        <a href="tambah-anggota.php">Tambah</a>
    </div>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            while ($row = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama_anggota'] ?></td>
                <td><?php echo $row['telepon'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td>
                    <a href="tambah-anggota.php?edit=<?php echo $row['id'] ?>">Edit</a>

                    <a onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini??')"
                        href="tambah-anggota.php?delete=<?php echo $row['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>