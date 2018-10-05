
<form method="post">
<table border="0">
	<tr>
		<td>NIM :</td>
		<td><input type="text" name="nim"></td>
	</tr>
	<tr>
		<td>Nama :</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Email : </td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit"></td>
	</tr>
</table>

<?php
session_start();
if(isset($_POST['submit'])){
$nama= $_POST['nama'];
$nim=$_POST['nim'];
$email=$_POST['email'];
$panjangnim=strlen($_POST['nim']);
$panjangnama=strlen($_POST['nama']);
$cek=true;
	if(empty($_POST['nim'])) {
		echo"nim harus diisi";
		$cek=false;
	}else if($panjangnim>10){
		echo"nim max 10 digit";
		$cek=false;
	}else{
		$nim=$_POST['nim'];
	}

	if(empty($_POST['nama'])) {
		echo"nama harus diisi";
		$cek=false;
	}else if($panjangnama>20){
		echo"nama harus 20 digit";
		$cek=false;
	}else{
		$nama=$_POST['nama'];
	}

	if(empty($_POST['email'])) {
		echo"email harus diisi";
		$cek=false;
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo"format email salah";
		$cek=false;
	}else{
		$email=$_POST['email'];
	}
	if($cek){
	$konek= mysqli_connect('localhost','root','','d_modul5');
	$sql = "INSERT INTO t_jurnal1 values ('$nim' , '$nama' , '$email','')";
	mysqli_query($konek , $sql);
	header("Location: hal2.php");
}
	}

 
?>
