<!DOCTYPE html>
<head>
<title>Luas dan Keliling Trapesium</title>
</head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <style media="screen">
body{
    background-color: lightblue;

}
</style>
<font color = "red"> <h3 align="center">Hitung Luas dan Keliling Trapesium</h3></font>
<font color = "green"> <h5 align="center">Silahkan inputkan nilai yang anda inginkan</h5></font>
<form action="trapesium.php" method="post" enctype="multipart/form-data">
<table cellpadding="4">
<tr>
    <td>Tinggi : </td>
    <td><input name="tinggi" type="text" class="form-control" required></td>
</tr>
<tr>
    <td>sisi A : </td>
    <td><input name="A" type="text" class="form-control" required></td>
</tr>
<tr>
    <td>sisi B : </td>
    <td><input type="text" name="B" class="form-control" required></td>
</tr>
<tr>
    <td>sisi C : </td>
    <td><input type="text" name="C" class="form-control" required></td>
</tr>
<tr>
    <td> sisi D : </td>
    <td><input type="text" name="D" class="form-control" required></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="submit" value="Proses"></td>
</tr>
   </table>
</form>
</body>
</html>
