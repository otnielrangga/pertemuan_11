<?php
    $dta[0]["nama"] = "Otniel Rangga";
    $dta[0]["alamat"] = "Jl. Tukad Pakerisan No.97";
    $dta[0]["tgl_lahir"] = "2000-10-15";
    $dta[0]["agama"] = "Kristen Protestan";
    $dta[0]["Jenis_Kelamin"] = "Laki-Laki";

    $dta[1]["nama"] = "Rangga Kamading";
    $dta[1]["alamat"] = "Jl. Tukad Pakerisan No.98";
    $dta[1]["tgl_lahir"] = "2001-10-15";
    $dta[1]["agama"] = "Kristen Protestan";
    $dta[1]["Jenis_Kelamin"] = "Laki-Laki";

    $dta[2]["nama"] = "Yodhy";
    $dta[2]["alamat"] = "Jl. Tukad Pakerisan No.99";
    $dta[2]["tgl_lahir"] = "2002-10-15";
    $dta[2]["agama"] = "Kristen Protestan";
    $dta[2]["Jenis_Kelamin"] = "Laki-Laki";


    

    

    header("Content-Type: application/json; chaset=utf-8");
    echo json_encode($dta); 






?>