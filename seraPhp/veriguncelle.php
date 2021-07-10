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
$seraadi=$_POST["seraadi"];
$sebze=$_POST["sebze"];
$dikimolcu=$_POST["dikimolcu"];
$dikimesafe=$_POST["dikimesafe"];
$gecesicaklik=$_POST["gecesicaklik"];
$gunduzsicaklik=$_POST["gunduzsicaklik"];
$cimsicaklik=$_POST["cimsicaklik"];
$usumedonma=$_POST["usumedonma"];
$nem=$_POST["nem"];
$isiksure=$_POST["isiksure"];
$ekistarihi=$_POST["ekistarihi"];
$bitistarihi=$_POST["bitistarihi"];

$buton=$_POST["buton"];
$id=$_POST["id"];

if($buton=="Guncelle")
{
$sql="Update sera set seraadi='".$seraadi."', sebze='".$sebze."', dikimolcu='".$dikimolcu."', dikimesafe='".$dikimesafe."', gecesicaklik='".$gecesicaklik."', gunduzsicaklik='".$gunduzsicaklik."', cimsicaklik='".$cimsicaklik."', usumedonma='".$usumedonma."', nem='".$nem."', isiksure='".$isiksure."', ekistarihi='".$ekistarihi."' , bitistarihi='".$bitistarihi."'where id='".$id."'";
if($con->query($sql)==TRUE)
echo "<b><font color='lightgreen'>Kayıt Düzenlendi...</font>";
else
{
echo "<b><font color='lightgreen'>Kayıt Düzenlenemedi...</font>";
echo "<br> $sql <br>";
echo $con->error;
}
}
else
{
$sql="select * from sera ";
$result=$con->query($sql);
if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc())
{
?>
<table border="0" BorderColor=orange bgcolor=orange>
<tr>
<td><?php echo "ID:"?></td>
<td><?php echo $row["id"];?></td>
<td><?php echo "seraadi:"?> </td>
<td><?php echo $row["seraadi"];?></td>
<td><?php echo "sebze:"?></td>
<td><?php echo $row["sebze"];?></td>
</tr>
<tr>
<td><?php echo "dikimolcu:"?></td>
<td><?php echo $row["dikimolcu"];?></td>
<td><?php echo "dikimesafe:"?></td>
<td><?php echo $row["dikimesafe"];?></td>
</tr>
<tr>
<td><?php echo "gecesicaklik:"?></td>
<td><?php echo $row["gecesicaklik"];?></td>
<td><?php echo "gunduzsicaklik:"?></td>
<td><?php echo $row["gunduzsicaklik"];?></td>

</tr>
<tr>
<td><?php echo "cimsicaklik:"?></td>
<td><?php echo $row["cimsicaklik"];?></td>
<td><?php echo "usumedonma:"?></td>
<td><?php echo $row["usumedonma"];?></td>

</tr>

<tr>
<td><?php echo "nem:"?></td>
<td><?php echo $row["nem"];?></td>
<td><?php echo "isiksure:"?></td>
<td><?php echo $row["isiksure"];?></td>

</tr>

<tr>
<td><?php echo "ekistarihi:"?></td>
<td><?php echo $row["ekistarihi"];?></td>
<td><?php echo "bitistarihi:"?></td>
<td><?php echo $row["bitistarihi"];?></td>

</tr>





</table>

<?php
}
} 
else 
{
echo "<b><font color='lightgreen'>Gösterilecek Kayıt Yok...</font>";
}
}
?>
</body>