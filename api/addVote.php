<?php
    include_once("koneksi.php");
    header("Content-type:application/json");
    class emp{

    }

    $nobp = $_POST['nobp_candidate'];
    $nobp_voter = $_POST['nobp_voter'];
    $token = $_POST['token'];
    $query1 = "SELECT * FROM user WHERE nobp = '$nobp_voter' AND token ='$token'";
    $hasil1 = mysqli_query($con, $query1);
    if(mysqli_fetch_array($hasil1)){
        $query = "SELECT * FROM suara WHERE nobp_candidate = '$nobp' ";
        $hasil = mysqli_query($con, $query);
        
        $rows = mysqli_fetch_array($hasil);
        if($rows){
            $suara = $rows['jumlah_suara'];
            $suara++;
            $query1 = mysqli_query($con, "UPDATE suara SET jumlah_suara='$suara' WHERE nobp_candidate='$nobp'  ");
            $query2 = mysqli_query($con, "UPDATE rfid SET status='1' WHERE nobp='$nobp_voter'  ");
            if($query1 && $query2){
                $response = new emp();
                $response->status="200";
                $response->message="Success";
                die(json_encode($response));
            }else{
                $response = new emp();
                $response->status="400";
                $response->message="Failed";
                die(json_encode($response));
            }
        }else{
            $response = new emp();
                $response->status="400";
                $response->message="Something went wrong";
                die(json_encode($response));
        }
    }else{
        $response = new emp();
        $response->status="200";
        $response->message="Invalid TOKEN";
        die(json_encode($response));
    }

    
?>