<?php			
    include 'koneksi.php';
	
	$query=$conn->query("SELECT * FROM toko WHERE id_warung='$_GET[id]'");
	$data= $query->fetch_assoc();

	$conn->query("DELETE FROM toko WHERE id_warung='$_GET[id]'");
	
	echo "<script>alert('Data Berhasil Dihapus');</script>";
	echo "<script>location='index.php?halaman=toko';</script>";
?>