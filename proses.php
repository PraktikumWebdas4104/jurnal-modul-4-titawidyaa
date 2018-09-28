<!DOCTYPE HTML>
<html lang="en">
<marquee><h1>HALAMAN PROSES</h1></marquee>
<hr>
<body bgcolor="pink">
<form action="#" method="post" enctype="multipart/form-data">  
<table>
  <tr>
    NAMA :
    <input type="text" name="nama"><br/>
  </tr>
  <tr>
    NIM :
    <input type="text" name="nim"><br/>
  </tr>
  <tr>
    HOBI : <br/>
    <input type="checkbox" name="hobi[]" value="berenang">Berenang<br/>
    <input type="checkbox" name="hobi[]" value="membaca novel/komik">Membaca Komik/Novel<br/>
    <input type="checkbox" name="hobi[]" value="menyanyi">Menyanyi<br/>
    <input type="checkbox" name="hobi[]" value="main alat musik">Main Alat Musik<br/>
    <input type="checkbox" name="hobi[]" value="lari">Lari<br/>
    <input type="checkbox" name="hobi[]" value="basket">Basket<br/>
    <input type="checkbox" name="hobi[]" value="sepak bola">Sepak Bola<br/>
    <input type="checkbox" name="hobi[]" value="voli">Voli<br/>
    <input type="checkbox" name="hobi[]" value="menulis cerita">Menulis Cerita<br/>
    <input type="checkbox" name="hobi[]" value="badminton">Badminton<br/>
    <input type="checkbox" name="hobi[]" value="travelling">Travelling<br/>
    <input type="reset" name="hapus" value="Edit Hobi"><br/>
  </tr>
   <tr>
    PILIH GAMBAR :</td><br/>
    <input type="file" name="upgambar" id="upgambar">
    <input type="submit" value="Upload Gambar" name="submit">
  </tr>
  <tr>
  <td><input type="submit" name="kirim" value="kirim"/></td>
  </tr>
</table>
</form>
</body>
</html>

<?php 
if(isset($_POST['kirim'])){
  $data=$_POST["hobi"];
  foreach ($data as $nilai) {
  echo $nilai ."<br/>";
}
}
?>
