<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$semester = $_POST['semester'];
$reg = $_POST['reg'];

$sql = $pdo->prepare("INSERT INTO mahasiswa(nim, nama, jenis_kelamin, semester, reg) VALUES(:nim,:nama,:jk,:semester,:reg)");
$sql->bindParam(':nim', $nim);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':jk', $jenis_kelamin);
$sql->bindParam(':semester', $semester);
$sql->bindParam(':reg', $reg);
$sql->execute();

if($sql){
	header("location: index.php");
}else{
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
