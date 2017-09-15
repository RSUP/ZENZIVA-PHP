<?php

$nohp=$_POST['nohp'];
$kode="182654"; //isikan sesuai dengan keinginan anda, tapi jangan masukkan huruf. hanya digit angka.
// Script Kirim SMS Api Zenziva
$userkey="isi-sendiri"; // userkey lihat di zenziva
$passkey="isi-sendiri"; // set passkey di zenziva
$message="Silahkan masukkan kode $kode pada kolom verifikasi untuk melengkapi registrasi anda. terima kasih.";

// $url = "http://zenziva.com/apps/smsapi.php";
$url = "https://reguler.zenziva.net/apps/smsapi.php";
$curlHandle = curl_init();
curl_setopt($curlHandle, CURLOPT_URL, $url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$nohp.'&pesan='.urlencode($message));
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
curl_setopt($curlHandle, CURLOPT_POST, 1);
$results = curl_exec($curlHandle);
curl_close($curlHandle);

// $curlHandle = curl_init();
// curl_setopt($curlHandle, CURLOPT_URL, $url);
// curl_setopt($curlHandle, CURLOPT_POSTFIELDS,'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$nohp.'&tipe='.$tipe.'&pesan='.urlencode($message));
// curl_setopt($curlHandle, CURLOPT_HEADER, 0);
// curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
// curl_setopt($curlHandle, CURLOPT_POST, 1);
// $results = curl_exec($curlHandle);
// curl_close($curlHandle);

header("location: inputver.html");
?>