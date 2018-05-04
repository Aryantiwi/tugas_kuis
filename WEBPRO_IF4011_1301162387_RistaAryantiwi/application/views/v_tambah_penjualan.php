<h3><?php echo $title; ?></h3>

<form method="post" action="<?php echo site_url('c_penjualan/proses_tambah_jual')?>">
<table>
	<tr><td>No Nota</td><td>:</td><td><input type='text' name='nota'/></td></tr>
	<tr><td>Tanggal</td><td>:</td><td><input type='date' name='tanggal'/></td></tr>
	<tr><td>Kode</td><td>:</td><td>
		<select name='kode'>
 		<option value=''>Pilih Kode</option>
 			<?php foreach ($barang as $brg) { ?>
 				<option value="<?php echo $brg->kode ?>"><?php echo $brg->kode ?></option>
 			<?php } ?>
 		</select>
 	</td></tr>
	<tr><td>Jumlah</td><td>:</td><td><input type='text' name='jumlah'/></td></tr>
</table>
<br/>
<input type='submit' value='TAMBAH'/>
<br/>
<a href="<?php echo site_url('c_penjualan/lihat_daftar_jual')?>">Kembali</a>
</form>