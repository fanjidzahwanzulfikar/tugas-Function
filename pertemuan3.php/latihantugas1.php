<?php

$nama = "Fanji Dzahwan Zulfikar";
$umur = 16;
$kelas = "X-RPL2";
$ttl = "Jakarta,08 Juli 2007";
$NoWhatsapp = "08567757587";
$alamat = "Jalan.Karang Anyar I NO.25. RT.05/RW.10";

function MyBiodata(){
    global $nama, $umur, $kelas, $ttl, $NoWhatsapp, $alamat;

    echo "namalengkap : $nama <br/>";
    echo "umur : $umur <br/>";
    echo "kelas : $kelas <br/>";
    echo "ttl : $ttl <br/>";
    echo "NoWhatsapp : $NoWhatsapp <br/>";
    echo "alamat : $alamat <br/>"; 
}
   echo MyBiodata();
?>