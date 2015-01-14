<html>
<head>
<title>GAPLEK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="icon" href="images/baik.png" type="image/x-icon">
<link rel="stylesheet" href="css/atur.css" type="text/css"/>
</head>
<body bgcolor="#eaeaeb" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br/>
<table id="Table_01" width="1000" height="501" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="7">
			<img src="images/header.png" width="1000" height="175" alt=""></td>
	</tr>
	<tr>
		<td background="images/index_02.png" width="39" height="260" alt=""></td>
		<!--menu-->
		<td colspan="2" background="images/menu.png" width="195" height="260" alt="" valign="top">
		

		<div style="border-collapse:collapse; background:#e4e4e4; border:1px solid #8f8f91;">
		<img src="images/menu_panel.png" width="193" height="48" alt="">
		<table border="0" align="center" width="100%">
		<tr>
		 <td valign="top"><img src="images/home.png" width="20" height="20" alt=""/></td>
		 <td><a href="index.php" target="" title="Beranda" class="menu_kiri">Beranda</a></td>
		</tr>
		<tr>
		 <td colspan="2"><hr/></td>
		</tr>
		<tr>
		 <td valign="top"><img src="images/input.png" width="20" height="20" alt=""/></td>
		 <td><a href="input_marker.php" target="" title="Input Data Marker" class="menu_kiri">Input Data Marker</a></td>
		</tr>
		<tr>
		 <td colspan="2"><hr/></td>
		</tr>
		</table>
		</div>
		<br/>

		<div style="border-collapse:collapse; background:#e4e4e4; border:1px solid #8f8f91;">
		<img src="images/layer.png" width="193" height="48" alt="">
		<br/>
		<table border="0" align="center">
		<tr>
		 <td valign="top"><input type="checkbox" id="kecamatan" onClick="ubahCheck('kecamatan');" value="0" /></td>
		 <td class="milih">Batas Kecamatan</td>
		</tr>
		<tr>
		 <td valign="top"><input type="checkbox" id="gaplek" onClick="ubahCheck('gaplek');" value="0" /></td>
		 <td class="milih">Lokasi Daerah Penghasil Gaplek Terbanyak</td>
		</tr>
		</table>
		</div>
		<br/>

		<div style="border-collapse:collapse; background:#e4e4e4; border:1px solid #8f8f91;">
		<img src="images/legenda.png" width="193" height="48" alt="">
		<br/>
		<table border="0" cellpadding="0" cellspacing="1" align="center">
		<tr>
		 <td bgcolor="#13d868"></td>
		 <td class="milih">Batas Kab. Gunungkidul</td>
		</tr>
		<tr>
		 <td width="40" bgcolor="#7daa90"></td>
		 <td class="milih">Batas Kec. Panggang</td>
		</tr>
		<tr>
		 <td bgcolor="#dfa345"></td>
		 <td class="milih">Batas Kec. Porwosari</td>
		</tr>
		<tr>
		 <td colspan="2">
			<hr/>
			<p class="milih" align="center"><b>-- Hasil Gaplek dalam (Kg) --</b></p>
			<hr/>
		 </td>
		</tr>
		<tr>
		 <td><img src="images/buruk.png"></td>
		 <td class="milih"> ------------- Berat <=200</td>
		</tr>
		<tr>
		 <td><img src="images/cukup.png"> </td>
		 <td class="milih">------------- Berat <=400</td>
		</tr>
		<tr>
		 <td><img src="images/baik.png"> </td>
		 <td class="milih">------------- Berat <=800</td>
		</tr>
		<tr>
		 <td><img src="images/sangat_baik.png"></td>
		 <td class="milih"> ------------- Berat >800</td>
		</tr>
		</table>
		</div>

		</td>
		<td background="images/index_04.png" width="5" height="260" alt=""></td>
		<!--isi-->
		<td colspan="2" background="images/isi.png" width="725" height="260" alt="" valign="top">