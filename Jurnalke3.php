<?php
// $namagambar = $_FILES['file'];
$file = $_FILES['file'];
$nama_file =$file['name'];
$nama_tmp = $file['tmp_name'];
$gambarterupload ="Gambar/";

$GambarUpload = move_uploaded_file($nama_tmp, $gambarterupload.$nama_file);

if ($GambarUpload){
	echo "Gambar Berhasil di Upload<br>";
	echo "<img src='".$gambarterupload.$nama_file."'>";

}else{
	echo "file gagal di upload";
}
?>