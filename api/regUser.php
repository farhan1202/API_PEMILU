<?php
    include_once('koneksi.php');
    header("Content-type:application/json");

    class emp{

    }

    $nobp = $_POST['nobp'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    $date = new DateTime();
    $datenow = $date->format("Y-m-d H:i:s");

    $num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tb_user WHERE nobp = '$nobp'"));
    if($num_rows == 0){
        $query = mysqli_query($con, "INSERT INTO tb_user VALUES(NULL, '$nobp', '$password', '$nama','')");
        if ($query) {
            $query = mysqli_query($con, "INSERT INTO tb_status (idcard, idfinger, nobp, date, ket, ket1, status)VALUES('0','0','$nobp', '$datenow', '0','0','0')");
            $response = new emp();
            $response->STATUS="200";
            $response->MESSAGE="Registration Success";  
            die(json_encode($response));
        }else{
            $response = new emp();
            $response->STATUS="400";
            $response->MESSAGE="Registration Failed";
            die(json_encode($response));
        }
    }else{
        $response = new emp();
        $response->STATUS="200";
        $response->MESSAGE="NO BP Sudah Digunakan";
        die(json_encode($response));
    }
?>