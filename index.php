<?php
if(isset($_POST['fname'])){
$link="https://simpeg.denpasarkota.go.id/?domain=&page=Scan-Absen-QR&language=id&action=scanabsen&param=";
$kode=$_POST['fname'];
  header("location:$link$kode");
  } else {}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Konversi QRCODE Absensi</h2>

<form method="POST">
  <label for="fname">Unik Kode</label><br>
  <input type="text" id="fname" name="fname" placeholder="masukkan unik kode absensi"><br>
  <button type="submit">OK</button>
</form> 


</body>
</html>

