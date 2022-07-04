<?php
	session_start();
	
	// menghapus semua session
	session_destroy();
	
	// mengalihkan halaman dan mengirimkan pesan logout
	header("location:../index.php?pesan=logout");
?>