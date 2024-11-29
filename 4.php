<!-- Buatkan sebuah function dimana function tersebut mempunyai 
 parameter nilai 
 
 jika nilai tersebut lebih besar sama dengan 85 dan di bawah sama dengan 100 maka mendapatkan Grade A
 jika nilai tersebut lebih besar sama dengan 75 dan lebih kecil dari 85 maka Grade nya adalah B
 jika nilai tersebut lebih besar sama dengan 65 dan lebih kecil dari 75 maka grade nya C
 selain itu D
 
 Output : Nilai : 78, grade B
 -->
<?php session_start() ?>
<form action="" method="post">
    <div class="form-group">
        <label for="">Nilai</label>
        <input type="text" name="angka1" placeholder="Masukkan Nilai">
    </div>
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
function penghitungNilai($angka1)
{
    if ($angka1 >=85 && $angka1 <=100) {
        return "A";
    }
    elseif ($angka1 >=75 && $angka1 <85) {
        return "B";
    }
    elseif ($angka1 >=65 && $angka1 <75) {
        return "C";
    }else{
        return "D";
    }
}   
if (isset($_POST['simpan'])) {
    $angka = $_POST['angka1'];
    echo "Nilai : " . $angka . " grade :" . penghitungNilai($angka);                     
}