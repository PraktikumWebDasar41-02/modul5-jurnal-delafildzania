<?php
session_start();
$konek = mysqli_connect('localhost','root','','d_modul5');

$sql="SELECT nama FROM t_jurnal1";
$query=mysqli_query($konek, $sql);
$halo= mysqli_fetch_array($query);

echo "Nama : ". $halo['nama'];
?>

<form method="post">
	Komentar: <textarea name="komen"></textarea><br>
	<input type="submit" name="submit"><br>
</form>

<?php
if(isset($_POST['submit'])){
	$komen=$_POST['komen'];
	$cek=true;

	if(empty($komen)){
		echo"Isi komentar anda";
		$cek=false;
	}else if(str_word_count($komen)<5){
		echo "Komentar harus lebih dari 5 kata";
		$cek=false;
	}

	if($cek){
		$update= "UPDATE t_jurnal1 SET komentar='$komen'";
		mysqli_query($konek, $update);
		header("Location: output.php");
	}
}
?>