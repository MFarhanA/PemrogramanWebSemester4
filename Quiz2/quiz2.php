<?php
$nip = "100111";
$nama = "Farhan";
$gaji = 2000000;
$bonus = 500000;
$tunjangan = $gaji * 0.05;
$pajak = $gaji * 0.1;

if ($nip == "100111") {
	if ($nama == "Farhan") {
    	echo "================<br></br>";
        echo "NIP	= 100111<br></br>";
        echo "Nama	= Farhan<br></br>";
        echo "================<br></br>";
        echo "Gaji = Rp." . $gaji . "<br></br>";
        echo "Bonus = Rp." . $bonus . "<br></br>";
        echo "Tunjangan = Rp." . $tunjangan . "<br></br>";
        echo "Pajak = Rp." . $pajak . "<br></br>";
        echo "================<br></br>";
        echo "Gaji yang harus dibayarkan = Rp." . ($gaji + $bonus + $tunjangan - $pajak);
    } else {
    	echo "Error! Data Invalid!";
    }
} else {
	echo "Error! Data Invalid!";
}
?>