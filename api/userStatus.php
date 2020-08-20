<?php
    include_once ("koneksi.php");
    header("Content-type:application/json");

    class emp{}
    $nobp = $_POST['nobp'];
    $token = $_POST['token'];
    $query1 = "SELECT * FROM tb_user WHERE nobp = '$nobp' AND token ='$token'";
    $hasil1 = mysqli_query($con, $query1);
    if(mysqli_fetch_array($hasil1)){
        $query = "SELECT * FROM tb_status WHERE nobp = '$nobp' ";
        $hasil = mysqli_query($con, $query);
    
        $rows = mysqli_fetch_array($hasil);
        if ($rows) {
            $response = new emp();
            $response1 = new emp();
            $response1->nobp = $rows['nobp'];
            $response1->finger = $rows['ket1'];
            $response1->rfid = $rows['ket'];
            $response1->vote = $rows['status'];
            $response->STATUS="200";
            $response->MESSAGE="SUKSES FETCH DATA";
            $response->DATA=$response1;
            die(json_encode($response));
        }else{
            $response = new emp();
            $response->STATUS="400";
            $response->MESSAGE="Failed Fetch Data";
            die(json_encode($response));
        }
    }else{
        $response = new emp();
        $response->STATUS="400";
        $response->MESSAGE="Invalid TOKEN";
        die(json_encode($response));
    }

    
?>