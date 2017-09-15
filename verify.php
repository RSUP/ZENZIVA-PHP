 <?php
$kode=$_POST['kodever'];
if($kode==182654) //isikan angka kode yang sesuai dengan yang ada pada halaman send.php
{
header("location: dasbor.php");
}
else{
header("location: cobalagi.php");
}
?>