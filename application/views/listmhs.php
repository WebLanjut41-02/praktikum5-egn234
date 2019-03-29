<!DOCTYPE html>
<html>
<head>
	<title>LIST DATA MAHASISWA</title>
</head>
<body>
	<h1>LIST DATA MAHASISWA</h1>
	<form action="<?=base_url();?>index.php/mhs/s/" method="post">
		<input type="text" name="cari"><button type="submit" name="igniteSearch">CARI</button>
	</form>
	<a href="<?=base_url();?>index.php/mhs/tambah">TAMBAH DATA</a>
	<table border="1">
		<tr>
			<th>no</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Tanggal Lahir</th>		
			<th>IPK</th>		
			<th>Kelas</th>
			<th colspan="2">Aksi</th>		
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($l_mhs as $key){ 
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $key->nama ?></td>
			<td><?= $key->nim ?></td>
			<td><?= $key->tgl_lahir ?></td>
			<td><?= $key->ipk ?></td>
			<td><?= $key->kelas ?></td>
			<td><a href="<?=base_url();?>index.php/mhs/update?nim=<?= $key->nim ?>">EDIT</td>
			<td><a href="<?=base_url();?>index.php/mhs/del_proc/<?= $key->nim ?>">DELETE</td>
		</tr>
	<?php } ?>
	</table>
	<br/>
	<?= $this->pagination->create_links();?>
</body>
</html>