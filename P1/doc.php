<?php
$conn=mysqli_connect("localhost","moises","123456");
mysqli_select_db($conn,"mibase");

$result=mysqli_query($conn,"insert into alumno(nombre, paterno) values('moa','sil')");
echo $result;
?>