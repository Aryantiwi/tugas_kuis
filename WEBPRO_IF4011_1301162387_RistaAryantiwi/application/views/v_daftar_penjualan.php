<h3><?php echo $title; ?></h3>
<table border=1>
	<thead>
		<tr>
			<th>No</th>
			<th>No Nota</th>
			<th>Tanggal</th>
			<th>Kode Barang</th>
			<th>Jumlah</th>
			<th>Pilihan</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			foreach ($penjualan['entries']->result_array() as $penjualan_entry){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo ($penjualan_entry['nota'] != NULL) ? $penjualan_entry['nota'] : '-';  ?></td>
			<td><?php echo $penjualan_entry['tanggal'] ?></td>
			<td><?php echo $penjualan_entry['kode'] ?></td>
			<td><?php echo $penjualan_entry['jumlah'] ?></td>
			<td>
				<a href="<?php echo site_url('c_penjualan/form_ubah_jual/')?><?php echo $penjualan_entry['nota'] ?>">Edit</a>
				<a href="<?php echo site_url('c_penjualan/proses_hapus_jual')?>/<?php echo $penjualan_entry['nota'] ?>">Delete</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<br/>
<a href="<?php echo site_url('c_penjualan/form_tambah_jual')?>">Tambah Data</a>
<br/>
<br/>
<a href="<?php echo site_url('c_menu/index')?>">Menu Awal</a>