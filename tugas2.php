<?php
// Apakah tombol cek sudah ditekan
if(isset($_POST["cek"])){
$nilai=$_POST["nilai"];
if($nilai==""){
echo"<b><h1> SILAHKAN MASUKKAN NILAI </h1></b>";
}elseif (!is_numeric($nilai)){
echo"<b><h1> NILAI HARUS BERUPA ANGKA </h1></b>";
}else{
if($nilai<=30){
echo"<b><h1> NILAI ANDA ADALAH E </h1></b>";
}elseif($nilai<=50){
echo"<b><h1> NILAI ANDA ADALAH D </h1></b>";
}elseif($nilai<=70){
echo"<b><h1> NILAI ANDA ADALAH C </h1></b>";
}elseif($nilai<=85){
echo"<b><h1> NILAI ANDA ADALAH B </h1></b>";
}else{
echo"<b><h1> NILAI ANDA ADALAH A </h1></b>";
}
}
}
?>
<html><head><title>Statement IF</title>
</head>
<body>
<form action="" method="post">
<label for="nilai"> Nilai</label>
<input type="text" name="nilai" id="nilai">
<button type="submit" name="cek"> Cek</button>
</form>
</body>
</html>
