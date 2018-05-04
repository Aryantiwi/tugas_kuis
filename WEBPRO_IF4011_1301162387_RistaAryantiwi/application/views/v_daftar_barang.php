<h3><?php echo $title; ?></h3>
<table border=1>
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Pilihan</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			foreach ($barang['entries']->result_array() as $barang_entry){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo ($barang_entry['kode'] != NULL) ? $barang_entry['kode'] : '-';  ?></td>
			<td><?php echo $barang_entry['nama'] ?></td>
			<td><?php echo $barang_entry['harga'] ?></td>
			<td>
				<a href="<?php echo site_url('c_barang/form_ubah/')?><?php echo $barang_entry['kode'] ?>">Edit</a>
				<a href="<?php echo site_url('c_barang/proses_hapus')?>/<?php echo $barang_entry['kode'] ?>">Delete</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<br/>
<a href="<?php echo site_url('c_barang/form_tambah')?>">Tambah Data</a>
<br/>
<br/>
<a href="<?php echo site_url('c_menu/index')?>">Menu Awal</a>