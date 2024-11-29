<?php 
 function kubus($s) {
   $volume = pow($s, 3);
   return $volume;
 }

 echo "Volume Kubus: " ;
 echo kubus(s: 5);
 echo "<br>";

 function luasKubus($s){
    $luas = 6 * pow($s, 2);
    return $luas;
 }

 echo "Luas Permukaan Kubus: " ;
 echo kubus(s: 5);
 echo "<br>";
 
 function balok($p, $l, $t){
    $volume = $p * $l * $t;
    return $volume;
 }

 echo "Volume Balok: " ;
 echo balok(p: 5, l:2, t:3);
 echo "<br>";
 
 function luasBalok($p, $l, $t){
    $volume = 2 * ($p * $l * $t);
    return $volume;
 }

 echo "Luas Permukaan Balok: " ;
 echo luasBalok(p: 5, l:2, t:3);
 echo "<br>";
 
 function limas($t, $s){
    $volume = 1/3 * pow($s, 2) * $t;
    return $volume;
 }

 echo "Volume Limas: " ;
 echo limas(3, 2);
 echo "<br>";


 function tabung($r, $t){
    $volume = M_PI * pow($r, 2) * $t;
    return $volume;
 }

 echo "Volume Tabung: " ;
 echo tabung(3, 2);
 echo "<br>";

 function luasTabung($r, $t){
    $luas = 2 * M_PI * $r * ($r + $t);
    return $luas;
 }

 echo "Luas Permukaan Tabung: " ;
 echo luasTabung(5, 2);
 echo "<br>";

 function bola($r){
    $volume = 4/3 * M_PI * pow($r, 3);
    return $volume;
 }

 echo "Volume Bola: " ;
 echo bola(5);
 echo "<br>";

 function luasBola($r){
    $luas = 4 * M_PI * pow($r, 2);
    return $luas;
 }

 echo "Luas Permukaan Tabung: " ;
 echo luasBola(5);
 echo "<br>";
?>