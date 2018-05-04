<h3><?php echo $title; ?></h3>

<form method="post" action="<?php echo site_url('c_barang/proses_tambah')?>">
<table>
	<tr><td>Kode Barang</td><td>:</td><td><input type='text' name='kode'/></td></tr>
	<tr><td>Nama Barang</td><td>:</td><td><input type='text' name='nama'/></td></tr>
	<tr><td>Harga</td><td>:</td><td><input type='text' name='harga'/></td></tr>
</table>
<br/>
<input type='submit' value='TAMBAH'/>
<br/>
<a href="<?php echo site_url('c_barang/lihat_daftar')?>">Kembali</a>
</form>