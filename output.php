<?php

session_start();
$konek = mysqli_connect('localhost','root','','d_modul5');

$sql="SELECT * FROM t_jurnal1";
$query=mysqli_query($konek, $sql);
$halo= mysqli_fetch_array($query);

echo "Nama : " .$halo['nama']."<br>";
echo "Komentar : " .$halo['komen']."<br>";
echo "Email : " .$halo['email']."<br>";

session_destroy();
?>