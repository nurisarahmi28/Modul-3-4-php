<?php
   
        $Tinggi = $_POST['tinggi'];
        $sisiA = $_POST['A'];
        $sisiB = $_POST['B'];
        $sisiC = $_POST["C"];
        $sisiD = $_POST["D"];

$luas = ($sisiA + $sisiB)*$Tinggi/2;
$kel = $sisiA + $sisiB + $sisiC + $sisiD;


echo "<h2>Result</h2> <hr>";
echo "Inputan: <br>";
echo "Tinggi = $Tinggi<br>";
echo "sisi A = $sisiA<br>";
echo "sisi B = $sisiB<br>";
echo "sisi C = $sisiC<br>";
echo "sisiD  = $sisiD<br>";
echo "Luas Trapesium = [($sisiA + $sisiB) x $Tinggi/2 ] = $luas<br>";
echo "Keliling Trapesium= [$sisiA + $sisiB + $sisiC + $sisiD] = $kel<br>";
    

?>