<body>
<?php
$server_name='localhost';
$user_name='root';
$password='';
$db="sera";
$con=new mysqli($server_name,$user_name,$password,$db);
if($con->connect_error)
{
echo 'Bağlantı Sağlanamadı...';
echo $con->error;
die();
}
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$konu=$_POST["konu"];
$mail=$_POST["mail"];
$mesaj=$_POST["mesaj"];


$buton=$_POST["buton"];

if($buton=="Gonder")
{
$sql="Insert Into iletisim(ad, soyad, konu, mail, mesaj) values('$ad', '$soyad', '$konu', '$mail', '$mesaj')";
if($con->query($sql)==TRUE)
echo "<b><font color='lightgreen'>Mesajınız Gönderildi.</font>";
else
{
echo "<b><font color='lightgreen'>Mesajınız Gönderilemedi.</font>";
echo "<br> $sql <br>";
echo $con->error;
}
}
?>
</body>