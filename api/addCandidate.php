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
    $profile = $_FILES['profile_image']['name'];
    $x = explode('.', $profile);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['profile_image']['size'];
    $filetemp = $_FILES['profile_image']['tmp_name'];
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $path = '';

    $query1 = mysqli_query($con, "SELECT * FROM tb_candidate WHERE nobp_candidate = '$nobp'");
    $num_rows = mysqli_num_rows($query1);
    if($num_rows==0){
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){
                $path = 'image/'.$profile;
                move_uploaded_file($filetemp, '../image/'.$profile);
                $query = mysqli_query($con, "INSERT INTO tb_candidate VALUES ('','$nobp','$nama','$jurusan','$keterangan','$datenow','$path')");
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
                $response->status="400";
                $response->message="File is to large";
                die(json_encode($response));
            }
        }else{
            $response = new emp();
            $response->status="400";
            $response->message="Error file extention";
            die(json_encode($response));
        }


        
        
    }else{
        $response = new emp();
            $response->status="200";
            $response->message="Id has been used";
            die(json_encode($response));
    }
?>

