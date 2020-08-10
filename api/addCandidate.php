

<?php
    include_once("koneksi.php");
    header("Content-type:application/json");

    class emp{}
    
    $nobp = $_POST['nobp_candidate'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $keterangan = $_POST['keterangan'];
    $date = new DateTime();
    $datenow = $date->format("Y-m-d H:i:s");

    $query1 = mysqli_query($con, "SELECT * FROM tb_candidate WHERE nobp_candidate = '$nobp'");
    $num_rows = mysqli_num_rows($query1);
    if($num_rows==0){
        $query = mysqli_query($con, "INSERT INTO tb_candidate VALUES ('','$nobp','$nama','$jurusan','$keterangan','$datenow')");
        if($query){
            $query1 = mysqli_query($con, "INSERT INTO tb_result VALUES ('','$nobp','0')");
            $response = new emp();
            $response->status="200";
            $response->message="Success add candidate";
            die(json_encode($response));
        }else{
            $response = new emp();
            $response->status="400";
            $response->message="Failed add candidate";
            die(json_encode($response));
        }
        
    }else{
        $response = new emp();
            $response->status="200";
            $response->message="Id has been used";
            die(json_encode($response));
    }
?>

