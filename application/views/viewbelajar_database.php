<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Biodata</h1>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
		</tr>
		<?php foreach($data->result_array() as $u) :
			$id_bio=$u['id_bio'];
			$nama=$u['nama'];
			$nim=$u['nim'];
			$alamat=$u['alamat'];
		 ?>
		<tr>
			<td><?php echo $id_bio ?></td>
			<td><?php echo $nama ?></td>
			<td><?php echo $nim ?></td>
			<td><?php echo $alamat ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>