<?php

// variables
$nama = "Nur Rahmi";
$umur = "20";
if(empty($nama)){
    echo "Tidak ada nama..";
} else{
  //Echo / print
 
echo "Nama saya adalah ".$nama.", saya berumur ".$umur;

  
}
//Data Typesm
echo "</br>";
$nama = "Nur Rahmi";
$NIM  = 202265088;
var_dump($nama);
echo "</br>";
var_dump($NIM);
echo "<br/>";

//Strings
$pesan = "Hi";
$error = 'Username tidak ditemukan';
$alamat = 'Jln. Trikora Kompleks Makassar';
echo $pesan . "<br/>" . $error . "<br/>" . $alamat;

//Numbers
echo "<br/>";
$x = 123;
var_dump(is_int($x));

echo "<br/>";
$x = 123.33;
var_dump(is_int($x));

//Math
echo "<br/>";
$x = 20;
$y = 50;
$z = 5;

echo $x * $z. '<br/>';
echo $x / $z. '<br/>';
echo $x + $y. '<br/>';
echo $x - $z;

//Constants
echo "<br>";
define('NAMA', 'Nur');
echo NAMA;
echo "<br>";
const UMUR = 20;
echo UMUR;

//Magic Constants
echo "<br>";
Function namaClass(){
  echo "Class ini bernama Pemweb " . _CLASS_ . "<br>";
  echo "Methodnya bernama " . _METHOD_ . "<br>";
}
$obj = namaClass();

//Operators
$angka = 40;
$angka2 = 33;
echo "Hasil dari $angka + $angka2 = " . $angka + $angka2;

//if...else..elseif
echo "<br>";
$mata_kuliah = 'PemWeb';
$nilai       = 80;

if ($nilai > 90){
  $hasil = "Nilai kamu A";
}elseif($nilai > 70 && $nilai <= 90){
  $hasil = "Nilai kamu B";
}elseif ($nilai > 50 && $nilai <= 70) {
  $hasil = "Nilai kamu C";
}
else {
  $hasil = "kamu harus belajar lagi";
}

echo $hasil;

//switch
echo "<br>";
$hari = 'senin';
switch ($hari) {
  case 'senin':
    echo 'Hari ini adalah hari ' .$hari. ', semangat baru hari pertama!';
    break;
  case 'jumat':
    echo 'Hari ini adalah hari ' .$hari. ', besok weekend!';
    break;
  case 'minggu':
    echo 'Hari ini adalah hari ' .$hari. ', yeyy happy weekend!';
    break;
  default:
    echo 'Hari ini adalah hari '  .$hari. ', tetap semangatt yaa!';
    break;
}

//Loops
echo "<br>";
for($i=0;$i<=5;$i++)
{
for($j=0;$j<=$i;$j++) {
echo " * ";
}
echo "<br/>";
}

//Function
function luasSegitiga($alas,$tinggi) {
  $luas =0.5 *$alas * $tinggi;
  return $luas;
}

function sum(...$input){
  $result = 0;

  foreach ($input as $value){
    $result = $result + $value;
  }
  return $result;
}

echo sum (1,2,3,56,23,334,56);
//Arrays
echo "<br>";
$tas = array("Laptop", "Buku", "Pulpen");
echo $tas[0];
echo $tas[1];
echo $tas[2];

//Superglobals
echo "<br>";
echo $_SERVER["SERVER_NAME"]
?>