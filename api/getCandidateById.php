<?php
    include_once("koneksi.php");
    header("Content-type:application/json");

    class emp{}
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_candidate WHERE id = '$id'";
    $hasil = mysqli_query($con, $query);

    $rows = mysqli_fetch_array($hasil);
    if ($rows) {
        $response = new emp();
        $response1 = new emp();
        $response1->id = $rows['id'];
        $response1->nobp = $rows['nobp_candidate'];
        $response1->nama = $rows['nama'];
        $response1->jurusan = $rows['jurusan'];
        $response1->keterangan = $rows['keterangan'];
        $response1->profile_image = $rows['profile_image'];
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