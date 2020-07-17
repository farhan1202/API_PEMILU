<?php
    include_once('koneksi.php');

    class emp{

    }

    $nobp = $_POST['nobp'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $date = date('ymd hms');

    $num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE nobp = '$nobp'"));
    if($num_rows == 0){
        $query = mysqli_query($con, "INSERT INTO user (nobp,password,nama) VALUES('$nobp', '$password', '$nama')");
        if ($query) {
            $query = mysqli_query($con, "INSERT INTO rfid (idcard, idfinger, nobp, date, ket, ket1, status)VALUES('0','0','$nobp', '$date', '0','0','0')");
            $response = new emp();
            $response->STATUS=200;
            $response->MESSAGE="Registration Success";  
            die(json_encode($response));
        }else{
            $response = new emp();
            $response->STATUS=200;
            $response->MESSAGE="Registration Failed";
            die(json_encode($response));
        }
    }else{
        $response = new emp();
        $response->STATUS=200;
        $response->MESSAGE="NO BP Sudah Digunakan";
        die(json_encode($response));
    }
?>