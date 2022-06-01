<?php 
	include 'koneksi.php';
	?>
 
	<table class="table table-bordered" border="1" style="width: 70%">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Jumlah</th>
				<th>Ongkirr</th>
				<th>Total</th>
				<th>Id CS</th>
			</tr>
		</thead>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from pembelian WHERE id_pembelian=$_GET[id]");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['tanggal_pembelian']; ?></td>
			<td>Rp.<?php echo number_format($data['harga_produk']); ?></td>
			<td>Rp.<?php echo number_format($data['ongkir']); ?></td>
			<td>Rp.<?php echo number_format($data['total_pembelian']); ?></td>
			<td><?php echo $data['id_pelanggan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 