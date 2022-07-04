<?php
	$koneksi = mqsqli_connect
	("localhost", " ", " ", "dbminggu13");
	
	if (mysqli_connect_error()) {
		echo "Koneksi database gagal :
		" . mqsqli_connect_error();
	}
?>