<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include ("koneksi.php");
function parseToXML($htmlStr) 
{
    $xmlStr = str_replace('<', '&lt;', $htmlStr);
    $xmlStr = str_replace('>', '&gt;', $xmlStr);
    $xmlStr = str_replace('"', '&quot;', $xmlStr);
    $xmlStr = str_replace("'", '&#39;', $xmlStr);
    $xmlStr = str_replace("&", '&amp;', $xmlStr);
    return $xmlStr;
}

$sql = "SELECT * FROM markers";
$hasil = mysql_query($sql);
if (!$hasil) {
    die('Query Gagal: ' . mysql_error());
}

header("Content-type: text/xml");
echo '<marker>';
while ($baris = mysql_fetch_assoc($hasil)) 
{
	$pic_marker = "";
	if($baris['berat'] <=200)
		$pic_marker = "images/buruk.png";
	else if($baris['berat'] <=400)
		$pic_marker = "images/cukup.png";
	else if($baris['berat'] <=800)
		$pic_marker = "images/baik.png";
	else if($baris['berat'] >800)
		$pic_marker = "images/sangat_baik.png";
    echo('
        <posisi
            ini_keterangan ="'.parseToXML(ucwords($baris['keterangan'])).'"
            latitude = "'.$baris[lat].'"
            longitude ="'.$baris[lng].'"
            berat_gaplek ="'.number_format($baris[berat], 2, ",",".").'"
			pic = "'.$pic_marker.'"
        />');
}
echo '</marker>';
?>
