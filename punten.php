<?php
$Nis = $_POST['Nis'];
$Namadepan = $_POST['nm_depan'];
$Namabelakang = $_POST['nm_bel'];
$TempatLahir = $_POST['tmpt_lahir'];
$TanggalLahir = $_POST['tgl_lahir'];
$Agama = $_POST['Agama'];
$JenisKelamin = $_POST['jenis_kelamin'];
$Telepon = $_POST['phone'];
$Facebook = $_POST['Facebook'];
$Website= $_POST['website'];
$Alamat = $_POST['alamat'];
$Jurusan = $_POST['jurusan'];
$Kelas = $_POST['kelas'];
$Pesan = $_POST['pesan'];

echo "<strong> <h1>Result<br> </strong> </h1><hr>"; 
echo "Nis = $Nis <br>";
echo "Nama depan : $Namadepan <br>";
echo "Nama Belakang : $Namabelakang <br>";
echo "Tempat Lahir : $TempatLahir <br>";
echo "Tanggal Lahir : $TanggalLahir <br>";
echo "Agama : $Agama <br>";
echo "Jenis kelamin : $JenisKelamin <br>";
echo "no.telpon : $Telepon <br>";
echo "Facebook : $Facebook <br>";
echo "Website : $Website <br>";
echo "Alamat : $Alamat <br>";
echo "Jurusan : $Jurusan <br>";
echo "Kelas : $Kelas <br>";
echo "Pesan yang anda sampaikan : $Pesan";
?>