<?php session_start() ?>
<form action="" method="post">
    <div class="form-group">
        <label for="">Angka 1</label>
        <input type="text" name="angka1" placeholder="Masukkan Nama Anda">
    </div>
    <br>
    <div class="form-group">
        <label for="">Angka 2</label>
        <input type="text" name="angka2" placeholder="Masukan Umur Anda" </div>
        <br>
        <input type="submit" name="simpan" value="simpan">
</form>
<?php
if (isset($_POST['simpan'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $total = $angka1 + $angka2;
    echo "<p> Hasilnya : $total </p>";
}
?>
<h1>Login form</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Masukkan Email Anda">
    </div>
    <br>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Masukan Umur Anda" </div>
        <br>
        <input type="submit" name="login" value="simpan">
</form>
<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // print_r($email);
    // ==
    // =
    // !
    // < <=
    // > >=

    if ($email == "admin@gmail.com" and $password == "admin") {
        $_SESSION['EMAIL'] = $email;
        header("location:dashboard1.php?login=berhasil");
    } else {
        echo "login Gagal";
    }

    // SESSION : var system menyimpan data di memory browser
    // cookies : menyimpan data di memory browser
    // localstorage : menyimpan data localstorage
}
?>