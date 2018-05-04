<h3><?php echo $title; ?></h3>

<form method="post" 
      action="<?php echo site_url('c_barang/proses_ubah')?>/<?php echo $kode;?>">
<table>
	<tr><td>Kode Barang</td><td>:</td><td><input type='text' name='kode'
	value='<?php echo $barang["kode"] ?>'/></td></tr>
	<tr><td>Nama Barang</td><td>:</td><td><input type='text' name='nama'
	value='<?php echo $barang["nama"] ?>'/></td></tr>
	<tr><td>Harga</td><td>:</td><td><input type='text' name='harga'
	value='<?php echo $barang["harga"] ?>'/></td></tr>
</table>
<br/>
<input type='submit' value='UBAH'/>
<br/>
<a href="<?php echo site_url('c_barang/lihat_daftar')?>">Kembali</a>
</form>
