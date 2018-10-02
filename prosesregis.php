<?php
session_start();
	if (!isset($_SESSION['data'])) {
		$data= array();
	}else{
		$data =$_SESSION['data'];
	}
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$email = $_POST['email'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$fakultas = $_POST['fakultas'];
		$program_studi = $_POST['program_studi'];
		$file_name =$_FILES['foto']['name'];
		$tmp_name =$_FILES ['foto']['tmp_name'];
		$file_move_success = move_uploaded_file($tmp_name, 'terkirim/'.$file_name);
		$hobby = $_POST['hobby'];
	
		$data_baru = array(
						'nama' => $nama,
						'nim' => $nim,
						'email' => $email,
						'jenis_kelamin'=> $jenis_kelamin,
						'fakultas'=> $fakultas,
						'program_studi'=> $program_studi,
						'hobby'=> $hobby,
						'foto'=> 'terkirim/'.$file_name
						);
		array_push($data, $data_baru);
		$_SESSION['data']= $data;
	}
?>
<table border="1">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jenis Kelamin</th>
		<th>Fakultas</th>
		<th>Program Studi</th>
		<th>Hobby</th>
		<th>Foto</th>
	</tr>
	<?php
	$data = $_SESSION['data'];
	$num = 0;
	while ($num < count($data)) {
	$hobby = implode(", ", $data[$num]['hobby']);
	?>
	<tr>
		<td><?php echo $data[$num]['nim']; ?></td>
		<td><?php echo $data[$num]['nama']; ?></td>
		<td><?php echo $data[$num]['email']; ?></td>
		<td><?php echo $data[$num]['jenis_kelamin']; ?></td>
		<td><?php echo $data[$num]['fakultas']; ?></td>
		<td><?php echo $data[$num]['program_studi']; ?></td>
		<td><?php echo $hobby; ?></td>
		<td><img src="<?php echo $data[$num]['foto']; ?>" width="200"></td>
	</tr>
	<?php
	$num++;
	}
	?>
</table>
<br>
<a href="registrasi.php">Tambah Data</a>