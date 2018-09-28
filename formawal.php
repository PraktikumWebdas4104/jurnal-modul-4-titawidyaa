<html>
<body bgcolor="pink">
 <marquee><h1>HALAMAN LOGIN :)</h1></marquee>
 <hr>
<form action="" method="post" enctype="multipart/form-data">  
<table align="center" border="2">
   <tr>
    <td>Username</td>
    <td><input type="text" name="username"></td>
   </tr>
   <tr>
    <td>Password</td>
    <td><input type="password" name="password"></td>
   </tr>
  </table>
  <table align="center"><tr><td align="center"><input type="submit" name="login" value="Log In"></td></center></tr></table>
 </form>
</body>
</html>

<?php 
if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
if($username=="admin"&&$password=="admin"){
  echo "LOGIN BERHASIL";
?>

  <a href="proses.php"> MASUK KE LINK PROSES </a>

<?php 
} 
else{ echo "LOGIN GAGAL";}
}
?>
