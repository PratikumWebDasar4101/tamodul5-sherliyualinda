<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<br>
	<br>
	<br>
	<center >
		<h3>APLIKASI PENDAFTARAN MAHASISWA</h3>
		<table bgcolor="pink">
			<form action="prosesregis.php" method="POST" enctype="multipart/form-data">
				<tr>
					<td>
						<label>Nama</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="nama" pattern="[A-Za-z ]{1,25}" title="Nama harus max 25 karakter" required=>
					</td>
				</tr>
				<tr>
					<td>
						<label>NIM</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="nim" pattern="[0-9]{10}" title="Nim harus angka serta 10 karakter" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Email</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="Email" name="email" placeholder="@gmail.com" required>
					</td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td>
						<label>Jenis Kelamin</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki<br>
						<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
					</td>
				</tr>
				<tr>
					<td>
						<label>Fakultas</label>
					</td>
				</tr>
				<tr>
					<td>
						<select name="fakultas">
							<option value="fit">Fakultas Ilmu Terapan</option>
							<option value="fik">Fakultas Industri Kreatif</option>
							<option value="fkb">Fakultas Komunikasi Bisnis</option>
							<option value="feb">Fakultas Ekonomi Bisnis</option>
							<option value="fri">Fakultas Rekayasa Industri</option>
							<option value="fif">Fakultas Informatika</option>
							<option value="fte">Fakultas Teknik Elektro</option>

						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label>Program Studi</label>
					</td>
				</tr>
				<tr>
					<td>
						<select name="program_studi">
							<option value="fit">Manajemen Informatika</option>
							<option value="d3tk">Teknik Komputer</option>
							<option value="d3if">Informatika</option>
							<option value="d3tt">Teknik Telekomunikasi</option>
							<option value="d3ka">Komputerisasi Akuntansi</option><option value="d3ph">Perhotelan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label>Hobby</label>
					</td>
				</tr>
				<tr>
					<td>
					<input type="checkbox" name="hobby[]" value="Menulis">Menulis
					<input type="checkbox" name="hobby[]" value="Membaca">Membaca
					<input type="checkbox" name="hobby[]" value="Makan">Makan
					<input type="checkbox" name="hobby[]" value="Tidur">Tidur
					<input type="checkbox" name="hobby[]" value="Belajar">Belajar<br>
					<input type="checkbox" name="hobby[]" value="Berenang">Berenang
					<input type="checkbox" name="hobby[]" value="Basket">Basket
					<input type="checkbox" name="hobby[]" value="Badminton">Badminton
					<input type="checkbox" name="hobby[]" value="Nonton">Nonton
				</td>
				</tr>
				<tr>
					<td>
						<label>Foto</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="file" name="foto">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="submit">
					</td>
				</tr>
			</form>
	</table>


</body>
</html>