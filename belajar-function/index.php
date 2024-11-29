<!-- variabel -->
<?php 
// $nama (variabel) dan "Dini" (string)
// varchar (hanya text), int (angka bulat), decimal (perkomaan.)
$nama = "Dini";
$nilaiInt = 30;
$nilaiFloat = 4.6;

// echo untuk menampilkan output
echo $nama;
echo "<br>";
echo $nilaiInt;
echo "<br>";
echo $nilaiFloat;
echo "<br>";

// *, /, =, -

$a = 4;
$b = 6;

$hasilKali = $a * $b;
// menggunakan titik untuk penghubung antar string dan variabel
echo "Hasil Kali Antara " . $a ." x ". $b ." = ". $hasilKali;
echo "<br>";

$hasilBagi = $a / $b;
echo "Hasil Bagi Antara " . $a ." : ". $b ." = ". $hasilBagi;
echo "<br>";

$hasilTambah = $a + $b;
echo "Hasil Tambah Antara " . $a ." + ". $b ." = ". $hasilTambah;
echo "<br>";

$hasilKurang = $a - $b;
echo "Hasil Kurang Antara " . $a ." - ". $b ." = ". $hasilKurang;
echo "<br>";

// Array
$arr = array("Dini", "Toni", "Budi", 27);
var_dump($arr);
echo "<br>";

echo $arr[2];
$arr2 = [[
    "id" => 1,
    "Nama" => "Doni",
    "Kelas" => "Web"
],[
    "id" => 2,
    "Nama" => "inoD",
    "Kelas" => "Jarkom"
],[
    "id" => 3,
    "Nama" => "oDin",
    "Kelas" => "Design"
]];
var_dump($arr2);
echo "<br><br>";
// echo $arr2[0]["Kelas"];


// $rows = mysqli_fetch_all($arr2, MYSQLI_ASSOC);
// $row = mysqli_fetch_assoc();

// foreach($arr2 as $value) {
//     echo "Nama " . $value['Nama'] . "<br>";
//     echo "Kelas " . $value['Kelas'] . "<br><br>";
// }


$param = 0;
while($param < count($arr2)) {
    echo "Nama " . $arr2[$param]['Nama'] . "<br>";
    echo "Kelas " . $arr2[$param]['Kelas'] . "<br><br>";
    $param++;
}

function penjumlahan($nilaiX, $nilaiY) {
    return $nilaiX + $nilaiY;
}

function pengurangan($nilaiX, $nilaiY) {
    return $nilaiX - $nilaiY;
}

$x = 6;
$y = 7;
echo penjumlahan($x, $y);
echo "<br>";

$x = 6;
$y = 7;
echo pengurangan($x, $y);
?>