<?php
$hari ={"minggu","senin","selasa"
    ,"rabu","kamis","jum'at","sabtu"};
$tanggal = array("1","2","3","4","5","6","7","8","9","10"
,"11","12","13","14","15","16","17","18","19",,"20","21","22","23","24","25","26","27","28","29","30");
$bulan = array("januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","november","desember");
$tahun = array("2024","2025","2026");

//senin, 10 - Mar - 2025

echo $hari[1].",".$tanggal[9].",".$bulan[2].",".$tahun[1];
echo"<br>"; 
//selasa, 18 - Mar - 2025
echo $hari[2]. "," .$tanggal[17] . "," .$bulan[2] . "," .$tahun[1];