<?php
include("koneksi.php");

$id = $_POST['id'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$ket = $_POST['ket'];
$abot = $_POST['abot'];

$sql ="INSERT INTO markers (id,keterangan,berat,lat,lng)VALUES($id,'$ket',$abot,$latitude,$longitude)";
$hasil = mysql_query($sql);
if(!$hasil){
	echo "<script>alert('Gagal Simpan, Silahkan Di Ulangi')</script>";
	echo "<html><head><meta http-eqsuiv='refresh' content='0;' url='input_marker.php'></head><body></body></html>";
	exit;
}else{
	echo "<script>alert('Data Marker berhasil disimpan.')</script>";
	echo "<html><head><meta http-equiv='refresh' content='0;url=index.php'></head><body></body></html>";
	exit;
}
?>