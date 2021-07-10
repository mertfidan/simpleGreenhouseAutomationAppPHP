<body>
<p><font face="tahoma" size="3" color="white">
<form action="verikayit.php" method="POST">
<table border="0">
<hr>
<b>Genel Bilgiler</b>
<br>
<br>
<tr>
<td><p><font face="tahoma" size="3" color="yellow">Sera adı :</p></td>
<td><input type="text" name="seraadi"></td>

<td><p><font face="tahoma" size="3" color="yellow">Sebze:</td>
<td><input type="text" name="sebze"></td>
</tr>
</table>
<hr>
<b>Ölçü ve Mesafe</b>
<br>
<br>
<table border="0">
<tr>
<td><p><font face="tahoma" size="3" color="yellow">Sera Dikim Ölçüsü : </td>

<td><input type="text" name="dikimolcu">
</td><td><p><font face="tahoma" size="3" color="yellow">Dikim Mesafesi: </td>
<td><input type="text" name="dikimesafe">
</tr>
</table>
<hr>
<b>Sıcaklıklar</b>
<br>
<br>


<table border="0">

<tr>
<td><p><font face="tahoma" size="3" color="yellow">Gece Sıcaklığı :</td> 
<td><select name="gecesicaklik">
<option value="10">10
<option value="11">11
<option value="12">12
<option value="13">13
<option value="14">14
<option value="15">15
<option value="16">16
<option value="17">17
<option value="18">18
<option value="19">19
<option value="20">20
<option value="21">21
<option value="22">22
<option value="23">23
<option value="24">24
<option value="25">25
<option value="26">26
<option value="27">27
<option value="28">28
<option value="29">29
<option value="30">30
</option>
</select></td>
<td><p><font face="tahoma" size="3" color="yellow">Gündüz Sıcaklığı :</td>
<td><select name="gunduzsicaklik">
<option value="10">10
<option value="11">11
<option value="12">12
<option value="13">13
<option value="14">14
<option value="15">15
<option value="16">16
<option value="17">17
<option value="18">18
<option value="19">19
<option value="20">20
<option value="21">21
<option value="22">22
<option value="23">23
<option value="24">24
<option value="25">25
<option value="26">26
<option value="27">27
<option value="28">28
<option value="29">29
<option value="30">30
</option>
</select></td>
</tr>
<tr>
<td><p><font face="tahoma" size="3" color="yellow">Çimlenme Sıcaklığı:</td>
<td><select name="cimsicaklik">
<option value="10">10
<option value="11">11
<option value="12">12
<option value="13">13
<option value="14">14
<option value="15">15
<option value="16">16
<option value="17">17
<option value="18">18
<option value="19">19
<option value="20">20
<option value="21">21
<option value="22">22
<option value="23">23
<option value="24">24
<option value="25">25
<option value="26">26
<option value="27">27
<option value="28">28
<option value="29">29
<option value="30">30
</option>
</select></td>
<td><p><font face="tahoma" size="3" color="yellow">Üşüme ve Donma Sıcaklığı:</td>
<td><select name="usumedonma">
<option value="-8">-8
<option value="-7">-7
<option value="-6">-6
<option value="-5">-5
<option value="-4">-4
<option value="-3">-3
<option value="-2">-2
<option value="-1">-1
<option value="0">0
<option value="1">1
<option value="1.5">1.5
<option value="2">2
</option>
</select></td>
</tr>
</table>
<hr>
<b>Işık ve nem</b>
<br>
<br>

<table border="0">

<tr>
<td><p><font face="tahoma" size="3" color="yellow">Nem:</td>
<td><input type="text" name="nem"></td>
<td><p><font face="tahoma" size="3" color="yellow">Işıklanma Süresi :</td> 
<td><select name="isiksure">
<option value="5 Saat">5 Saat
<option value="8 Saat">8 Saat
<option value="10 Saat">10 Saat
<option value="12 Saat">12 Saat
<option value="15 Saat">15 Saat
<option value="16 Saat">16 Saat
<option value="18 Saat">18 Saat
<option value="20 Saat">20 Saat
<option value="22 Saat">22 Saat
<option value="24 Saat">24 Saat
</option>
</select></td>
</tr>
</table>
<hr>
<b>Başlangıç ve Bitiş Tarihleri</b>
<br>
<br>
<table border="0">
<tr>
<td><p><font face="tahoma" size="3" color="yellow">Ekildiği Tarih:</td>
<td><input type="text" name="ekistarihi"></td>

<td><p><font face="tahoma" size="3" color="yellow">Tahmini Bitiş Tarihi:</td>
<td><input type="text" name="bitistarihi"></td>

</td>

</table>
(Eklediğiniz serayı görmek için sera adını yazıp sera arama butonuna basınız.)
<hr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="buton" value="Kaydet(Ekle)">
<input type="submit" name="buton" value="Sera Ara">

</form>
</body>