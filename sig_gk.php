</html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>GAPLEK</title>
    <link rel="stylesheet" href="atur/style.css" type="text/css" media="screen" />
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiLKVS621s8-moOczlI9YRuCxdZiasaq4&sensor=false"></script>
	<script type="text/javascript" src="http://geoxml3.googlecode.com/svn/branches/polys/geoxml3.js"></script>
	<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
	<script type="text/javascript">
	
    function ndelokInfoWindow(marker, map, infoWindow, deskripsi) 
	{
		google.maps.event.addListener(marker, 'click', function() 
		{
			infoWindow.setContent(deskripsi);
			infoWindow.open(map, marker);
		});
	}
    function downloadUrl(url,callback) 
	{
		var request = window.ActiveXObject ?
		new ActiveXObject('Microsoft.XMLHTTP') :
		new XMLHttpRequest;
		request .onreadystatechange = function() 
		{
			if (request.readyState == 4) 
			{
				request.onreadystatechange = kosongInfo;
				callback(request, request.status);
			}
		};
		request .open('GET', url, true);
		request .send(null);
	}
    function kosongInfo() {}
	function kab_gk_kec_dan_info_gaplek()
	{
		var mapAtur = 
		{
			zoom: 15
		}
		var mapGK = new google.maps.Map(document.getElementById('peta_saya'), mapAtur);		
		var infoWindow = new google.maps.InfoWindow;      
		downloadUrl("akses_marker.php", function(data) 
		{
			var xml = data.responseXML;
			var posisi2 = xml.documentElement.getElementsByTagName("posisi");
			for (var i = 0; i < posisi2.length; i++) 
			{
				var keterangan = posisi2[i].getAttribute("ini_keterangan");
				var titikLatLng = new google.maps.LatLng
				(
					parseFloat(posisi2[i].getAttribute("latitude")),
					parseFloat(posisi2[i].getAttribute("longitude"))
				);
				var berat = posisi2[i].getAttribute("berat_gaplek");
				var icon = posisi2[i].getAttribute("pic");
				var deskripsi = "<b>" + keterangan + "<br/>" + " Hasil Gaplek : " + berat + " Kg</b>";
				var ikitondo = new google.maps.Marker({map:mapGK,position: titikLatLng,icon: icon});
				ndelokInfoWindow(ikitondo, mapGK, infoWindow, deskripsi);
			}
		});
		var petaGK = new google.maps.KmlLayer
		({
			url: 'http://www.arifsig.is-best.net/kml/kab_kec.kml'
		});
		petaGK.setMap(mapGK);
	}
	function kab_gk_dan_info_gaplek()
	{
		var mapAtur = 
		{
			zoom: 15
		}
		var mapGK = new google.maps.Map(document.getElementById('peta_saya'),mapAtur);
		var infoWindow = new google.maps.InfoWindow;
		downloadUrl("akses_marker.php", function(data) 
		{
			var xml = data.responseXML;
			var posisi2 = xml.documentElement.getElementsByTagName("posisi");
			for (var i = 0; i < posisi2.length; i++) 
			{
				var keterangan = posisi2[i].getAttribute("ini_keterangan");
				var titikLatLng = new google.maps.LatLng
				(
					parseFloat(posisi2[i].getAttribute("latitude")),
					parseFloat(posisi2[i].getAttribute("longitude"))
				);
				var berat = posisi2[i].getAttribute("berat_gaplek");
				var icon = posisi2[i].getAttribute("pic");
				var deskripsi = "<b>" + keterangan + "<br/>" + " Hasil Gaplek : " + berat + " Kg</b>";
				var ikitondo = new google.maps.Marker({map:mapGK,position: titikLatLng,icon: icon});
				ndelokInfoWindow(ikitondo, mapGK, infoWindow, deskripsi);
			}
		});
		var petaGK = new google.maps.KmlLayer
		({
			url: 'http://arifsig.is-best.net/kml/kab_gunungkidul.kml'
		});
		petaGK.setMap(mapGK);
	}	
	function kecamatan_kula()
	{
		var mapAtur = 
		{
			zoom: 15
		}
		var mapGK = new google.maps.Map(document.getElementById('peta_saya'), mapAtur);
		var infoWindow = new google.maps.InfoWindow;
		var petaGK = new google.maps.KmlLayer
		({
			url: 'http://arifsig.is-best.net/kml/kab_kec.kml'
		});
		petaGK.setMap(mapGK);
	}
	function kab_gk()
	{
		var mapAtur = 
		{
			zoom: 15
		}
		var mapGK = new google.maps.Map(document.getElementById('peta_saya'), mapAtur);
		var infoWindow = new google.maps.InfoWindow;
		var petaGK = new google.maps.KmlLayer
		({
			url: 'http://arifsig.is-best.net/kml/kab_gunungkidul.kml'
		});
		petaGK.setMap(mapGK);
	}
  </script>
 </head>
 <body onLoad="kab_gk_dan_info_gaplek()">
   <div id="iki_isi"></div>
   <div id="peta_saya" style="height:500px"></div>
 </body>
 </html>