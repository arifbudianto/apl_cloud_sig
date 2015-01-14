<?php 
 $konek = mysql_connect("isi_dengan_host_anda","username_anda","pass_anda");
 if (! $konek)
    die("Database MySQL tak dapat dibuka");

 if (! mysql_select_db("db_anda", $konek))
    die("Database tidak bisa dipilih");
?>