<html>
<head>
<title>GAPLEK</title>
<link href="http://code.google.com/apis/maps/documentation/javascript/examples/standard.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://geoxml3.googlecode.com/svn/branches/polys/geoxml3.js"></script>
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
var petaq;
	function peta_1()
	{
		var kab_gunungkidul= new google.maps.LatLng(-7.964974, 110.600785);
		var petaoption = {
			zoom: 10,
			center: kab_gunungkidul,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		petaq = new google.maps.Map(document.getElementById("mapku"),petaoption);
		var geoXml = new geoXML3.parser({map: petaq});
		geoXml.parse('kml/kml_input.kml');
		google.maps.event.addListener(petaq,'click',function(event)
		{
			kasihtanda(event.latLng);
		});
	}

function kasihtanda(lokasi)
{
    $("#form").slideDown();
    $("#lat").val(lokasi.lat());
    $("#lng").val(lokasi.lng());
    tanda = new google.maps.Marker(
	{
        position: lokasi,
        map: petaq
    });
}

$(document).ready(function()
{
    $("#simpen").click(function()
	{
        var latitude = $("#lat").val();
        var longitude = $("#lng").val();
        var ket = $("#keterangan").val();
        var abot= $("#berat").val();
        $("#loading").show();
        $.ajax({
            url: "simpan_input.php",
            data: "Latitude="+latitude+"&Longitude="+longitude+"&Keterangan="+ket+"&Berat (Kg)="+abot,
            cache: false,
            success: function(msg)
			{
                $("#teks").html(msg);
                $("#loading").hide();
                $("#form").slideUp();
                $("#lat").val("");
                $("#lng").val("");
                $("#keterangan").val("");
                $("#berat").val("");
            }
        });
    });
    $("#batalke").click(function()
	{
        $("#form").slideUp();
    });
});
</script>
</head>
<body onload="peta_1()">
<center>
<form action="simpan_input.php" method="post">
<p class="penting" align="center">::: PERHATIAN :::</p>
<p class="penting" align="center">Cara untuk Input Data Marker yaitu click pada <b>Lokasi Daerah</b> di wilayah Kab. Gunungkidul</p>
<hr/>
<div id="mapku" style="height:400px;"></div>
<div id="form" style="display:none;background-color:#8b8b8c; height:210px; text-align:left; padding:10px">
<p class="judul" align="center">FORM INPUT DATA MARKER</p>
<table border="0"  align="center"  class="input_marker">
 <tr>
  <td>ID</td><td>:<input type=text name="id" size="5" class="isi_form"/></td>
  </td>
 </tr>
 <tr>
  <td>Latitude</td><td>:<input type="text" name="latitude" id="lat" size="24" class="isi_form" /></td>
  <td>Longitude</td><td>:<input type="text" name="longitude" id="lng" size="24" class="isi_form"/></td>
  </td>
 </tr>
 <tr>
  <td>Nama Lokasi</td><td>:<input type="text" name="ket" id="keterangan" class="isi_form"/></td>
  </td>
 </tr>
 <tr>
  <td>Berat Gaplek</td><td>:<input type="text" name="abot" id="berat" class="isi_form" size="10"/> Kg</td>
  </td>
 </tr>
 <tr>
  <td><button id="simpen" class="tombol">SIMPAN</button></td>
  <td><button id="batalke" class="tombol">BATAL</button></td>
 </tr>
</table>
</div>
</form>
</body>
</html>
