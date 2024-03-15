<?php

require "../config/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
# code...

$result = array();
$id = $_POST['id'];

$insert = "DELETE FROM users WHERE id='$id'";
if (mysqli_query($con, $insert)) {
    # code...
    $result['value'] = 1;
    $result['message'] = "Berhasil";
    echo json_encode($result);
} else {
    # code...
    $result['value'] = 0;
    $result['message'] = "Gagal";
    echo json_encode($result);
}

}