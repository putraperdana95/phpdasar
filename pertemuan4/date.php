<?php 
    // date dgn format tertentu
    // echo date("l, d-M-Y");

    // time
    // echo time ();

    // echo date ("l", time()+60*60*24*200);

    // MK Time (membuat sedtik sendiri)
    // MK time (0,0,0,0,0,0) = jam, menit, detik, bulan, tanggal, tahun
    // echo date ("l", mktime(0,0,0,1,20,1995));

    // strtotime
    echo date ("l", strtotime("20 jan 1995"));
?>