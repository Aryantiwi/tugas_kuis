<h3><?php echo $title; ?></h3>

<form method="post" 
      action="<?php echo site_url('c_penjualan/proses_ubah_jual')?>/<?php echo $nota;?>">
<table>
	<tr><td>No Nota</td><td>:</td><td><input type='text' name='nota'
	value='<?php echo $penjualan["nota"] ?>'/></td></tr>
	<tr><td>Tanggal</td><td>:</td><td><input type='date' name='tanggal'
	value='<?php echo $penjualan["tanggal"] ?>'/></td></tr>
	<tr><td>Kode</td><td>:</td><td>
		<select type='text' name='kode'>
 		<option value=""></option>
 			<?php foreach ($barang as $brg) { ?>
 				<option value="<?php echo $brg->kode ?>"<?php $penjualan['kode']==$brg->kode ? print 'selected' : ' '  ?>><?php echo $brg->kode ?></option>
 			<?php } ?>
 		</select>
	</td></tr>
	<tr><td>Jumlah</td><td>:</td><td><input type='text' name='jumlah'
	value='<?php echo $penjualan["jumlah"] ?>'/></td></tr>
</table>
<br/>
<input type='submit' value='Simpan'/>
<br/>
<a href="<?php echo site_url('c_penjualan/lihat_daftar_jual')?>">Kembali</a>
</form>