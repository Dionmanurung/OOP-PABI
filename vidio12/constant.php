<?php
//tidak bisa disimpan dalam sebuah class
define('Nama','Dion saputra manurung');
echo Nama;
echo "<br>";
//bisa dimasukkan ke dalam class.
const Umur = 21;
echo Umur;
echo "<br>";
class Coba{
 const Nama = 'Dion saputra manurung';
}
echo Coba::Nama;
echo "<br>";
echo __FILE__;
echo "<br>";
function coba(){
 return __FUNCTION__;
}
echo coba();
echo "<br>";
class Cobacoba{
 public $kelas = __CLASS__;
}
$obj = new Cobacoba;
echo $obj->kelas;