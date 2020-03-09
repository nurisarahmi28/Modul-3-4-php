<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Biodata</title>
</head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <style media="screen">

    body{
        background-image: url('awan.jpg');
    }
    </style>

        <h1 align="center"><font color = "purple">Daftar Siswa Moklet</font></h1>
        <h4 align ="center"><font color = "black">Silahkan mengisi Formulir ini!</font></h4>
        <form name="coba1" method="post" action="punten.php">
        <div class = "container">
       <table cellpadding="5">
    <tr>
            <td>Nis:</td>
            <td><input type="text" name="Nis" class="form-control"></td>
    </tr>
    <tr> 
            <td> Nama depan: </td>
            <td><input type="text" name="nm_depan" class="form-control"></td>
    </tr>
    <tr>
            <td>Nama belakang:</td>
            <td><input type="text" name="nm_bel" class="form-control"></td>
    </tr>
    <tr>
            <td>Tempat Lahir:</td>
            <td><input type="text" name="tmpt_lahir" class="form-control"></td>
    </tr>
    <tr>
            <td>Tanggal Lahir:</td>
            <td><input type="date" name="tgl_lahir" required></td>
    </tr>
    <tr>
            <td>Agama:</td>
            <td><input type="text" name="Agama" class="form-control" required></td>
    </tr>
    <tr>
            <td>Jenis Kelamin:</td>
            <td> <input type='radio' name='jenis_kelamin' value='pria'/>Pria </td> 
            <td> <input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan </td>
    </tr>
    <tr>
            <td>Email:</td>
            <td><input type="email" name="username" class="form-control" required></td>
    </tr>
    <tr>
            <td>Telepon:</td>
            <td><input type="number" name="phone" class="form-control" required></td>
    </tr>
    <tr>
            <td>Facebook:</td>
            <td><input type="text" name="Facebook" class="form-control" required></td>
    </tr>
    <tr>
            <td>Website:</td>
            <td><input type="text" name="website" class="form-control" required placeholder="http://"></td>
    </tr>
    <tr>
            <td>Alamat:</td>
            <td><textarea cols="20" rows="5" name="alamat" required></textarea></td>
    </tr>
    <tr>
            <td>Jurusan:</td>
            <td>
            <select name="jurusan" required>
            <option value="RPL">Rekayasa Perangkat Lunak</option>
            <option value="TKJ">Teknik Komputer Jaringan</option>
            </select></td>
    </tr>
    <tr>
            <td>Kelas:</td>
            <td>
            <select name="kelas" required>
                <option value="10"> X </option>
                <option value="11"> XI </option>
                <option value="12"> XII </option>
            </select></td>
    </tr>
    <tr>
            <td>password: </td>
            <td><input type="password" name="password" class="form-control"></td>
    </tr>
    <tr>
            <td>Pesan:</td>
            <td><textarea cols="20" rows="5" name="pesan" required></textarea></td>
    </tr>
    
            </table>
            <button type="submit" class="btn btn-sm btn-success"> Simpan</button>
            <button type="reset" class="btn btn-sm btn-danger">Batal</button>
            </body>
            </div>
            </form>
            </html>
