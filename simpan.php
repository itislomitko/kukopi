<?php
include("koneksi.php"); 
$tanggal = date("Y-m-d"); 
$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan = $_POST['pesan'];
$tanggal = $tanggal;
$sql="insert into tamu(nama,email,pesan,tanggal) values ('$nama','$email','$pesan','$tanggal')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
echo"<script>alert('Terima Kasih, Kami Telah Menerima Pesan Anda Dan Akan Segera Merespon Pesan Anda Secepatnya');</script>";
echo"<script>location='index.html';</script>";
?>