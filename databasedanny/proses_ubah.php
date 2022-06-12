<?php
include "koneksi.php";

$id = $_GET['id'];

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$semester = $_POST['reg'];
$reg = $_POST['reg'];

$sql = $pdo->prepare("UPDATE mahasiswa SET nim=:nim, nama=:nama, jenis_kelamin=:jk, semester=:semester, reg=:reg WHERE id=:id");
$sql->bindParam(':nim', $nim);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':jk', $jenis_kelamin);
$sql->bindParam(':semester', $semester);
$sql->bindParam(':reg', $reg);
$sql->bindParam(':id', $id);
$execute = $sql->execute();

if($execute){
	header("location: index.php");
}else{
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>
