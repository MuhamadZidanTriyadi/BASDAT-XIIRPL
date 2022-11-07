<?php 

$kelas12rpl = ['Zidan','Erlangga','Hasan','Putra','Haikal','Adi','Fayi','Gustiar','Adit','Pratama'];
echo "SIAPA TEMAN FAVORIT MU?";

echo "<br />";

print_r($kelas12rpl);

echo "<br />";
echo "<hr />";

array_push($kelas12rpl, 'Fajar','Haikal');
echo "2 TAMBAHAN";
echo "<br />";
echo $kelas12rpl[10];
echo " ";
echo $kelas12rpl[11];
echo "<hr />";
echo "TOTAL TEMAN FAVORIT : ";
echo "<br />";
print_r($kelas12rpl);
echo "<hr />";

?>