<?php

require "../config/config.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {


    $result = array();
    $cek = mysqli_query($con, "SELECT * FROM users");
    while ($a = mysqli_fetch_array($cek)) {
        # code...
        $result['users'][] = array(
            "id" => (int)$a['id'],
            "nama" => $a['nama_lengkap'],
            "phone" => $a['phone'],
            "email" => $a['email'],
        );
    }

    echo json_encode($result); 
}