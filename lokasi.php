<?php
include("koneksi.php");
$lokasi = mysql_query("select * from markers");
while($l=mysql_fetch_array($lokasi)){
    echo "<a href=\"javascript:setpeta(".$l['lat'].",".$l['lng'].",".$l['id'].")\">".$l['berat']."</a><br>\n";
    echo "<span id=\"".$l['id']."\" style=\"display:none\">".$l['keterangan']."</span>\n";
}
?>
