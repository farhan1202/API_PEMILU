<?php
    include_once('koneksi.php');

    class emp{}

    $nobp = $_POST['nobp'];
    $password = $_POST['password'];

    if ((empty($nobp))||(empty($password))) {
        $response = new emp();
        $response->STATUS="200";
        $response->MESSAGE="Pastikan data terisi";
        die(json_encode($response));
    }

    $query = mysqli_query($con, "SELECT * FROM user WHERE nobp='$nobp' AND password='$password'");

    $row = mysqli_fetch_array($query);
    if ($row) {
        $response = new emp();
        $response1 = new emp();
        $response1->nobp = $row['nobp'];
        $response1->nama = $row['nama'];

        $response->STATUS="200";
        $response->MESSAGE="Login Succes";
        $response->DATA=$response1;
        die(json_encode($response));
    }else{
        $response = new emp();
        $response->STATUS="400";
        $response->MESSAGE="Login Failed";
        die(json_encode($response));
    }

?>