<?php session_start();
include "config/koneksi.php";
$username=$_POST['username'];
$password=($_POST['password']);
$query=mysql_query("select * from admin where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
if($cek){
$_SESSION['username']=$username;
//pergi ke halaman
  header('location:web.php?page=home');

}else{
?>Anda gagal login. silahkan <a href="../index.php">Login kembali</a><?php
echo mysql_error();
}
?>
