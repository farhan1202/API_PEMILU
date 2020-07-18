<?php
    include_once("koneksi.php");

    class emp{}
    $nobp = $_POST['nobp'];
    $query = "SELECT * FROM user WHERE nobp = '$nobp'";
    $hasil = mysqli_query($con, $query);

    $rows = mysqli_fetch_array($hasil);
    if ($rows) {
        $response = new emp();
        $response1 = new emp();
        
        $response1->nobp = $rows['nobp'];
        $response1->nama = $rows['nama'];
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
?>