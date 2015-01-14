<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href=".png"/>
    <title>SIG Kab. Gunungkidul</title>
    <link rel="stylesheet" href="css/atur.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://geoxml3.googlecode.com/svn/branches/polys/geoxml3.js"></script>
	<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
	<script type="text/javascript"> 
	function tampilPeta(kecamatan,gaplek)
	{
		var informasi_layer = "";
		var ini_kecamatan = document.getElementById(kecamatan).value;
		var hasil_gaplek = document.getElementById(gaplek).value;
		if(ini_kecamatan == 1 && hasil_gaplek == 0)
		{
			informasi_layer = "<p class='penting'># Layer Batas Kecamatan ON</p><hr/>";
			kecamatan_kula();
		}
		else if(ini_kecamatan == 0 && hasil_gaplek == 1)
		{
			informasi_layer = "<p class='penting'># Marker Informasi Gaplek ON</p><hr/>";
			kab_gk_dan_info_gaplek();
		}
		else if(ini_kecamatan == 1 && hasil_gaplek == 1)
		{
			informasi_layer = "<p class='penting'># Layer Batas Kecamatan ON dan Marker Informasi Gaplek ON</p><hr/>";
			kab_gk_kec_dan_info_gaplek();
		}
		else if(ini_kecamatan == 0 && hasil_gaplek == 0)
		{
			informasi_layer = "<p class='penting'># Layer Batas Kabupaten Gunungkidul ON</p><hr/>";
			kab_gk();
		}
		document.getElementById("iki_isi").innerHTML=informasi_layer;
	}
    function ubahCheck(id)
	{
		var chek = document.getElementById(id).value;
		if(chek == 0)
		{
			document.getElementById(id).value = 1;
		}
		else if(chek == 1)
		{
			document.getElementById(id).value = 0;
		}
		tampilPeta("kecamatan","gaplek"); 
	}
	</script>
</head>
<body onLoad='tampilPeta("kecamatan","gaplek");'>
</body>
</html>