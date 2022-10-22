<html>
<head>
<title>CRUD - SEAYANA</title>
</head>
<body>
<h2>MODULE USER AING</h2>
<br/>
	<a href="tambah_user.php">+ TAMBAH USER</a>
<br/>
<table border="1">
<tr>
<th>No</th>
<th>Nama</th>
<th>password</th>
<th>level</th>
<th>Status</th>
<th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$query = mysqli_query ($koneksi,"SELECT* FROM user");
while ($data = mysqli_fetch_array($query))
{
	?>
	<tr>
	<td><?php echo $no++;?></td>
	<td><?php echo $data['nama']; ?></td>
	<td><?php echo $data['password']; ?></td> 
	<td><?php echo $data['level']; ?></td>
	<td><?php echo $data['status']; ?></td>
	<td>
	<a href="edit_user.php?id=<?php echo $data['id']; ?>">EDIT</a>
	<a href="hapustr_user.php?id=<?php echo $data['id']; ?>"> HAPUS</a>
	</td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>

	
	

