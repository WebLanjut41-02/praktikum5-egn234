<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>TAMBAH MAHASISWA</h1>
	<form action="<?=base_url();?>index.php/mhs/insert_mhs" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="tgl"></td>
			</tr>
			<tr>
				<td>IPK</td>
				<td>:</td>
				<td><input type="text" name="ipk"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas">
						<option value="41-01">41-01</option>
						<option value="41-02">41-02</option>
						<option value="41-03">41-03</option>
						<option value="41-04">41-04</option>
					</select>
				</td>
			</tr>
		</table>
		<button type="submit" name="tambahdata">SIMPAN</button>
		<a href="<?=base_url();?>index.php/mhs">BACK</a>
	</form> 
</body>
</html>