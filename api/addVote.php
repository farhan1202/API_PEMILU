<?php
    include_once("koneksi.php");
    header("Content-type:application/json");
    class emp{

    }

    $nobp = $_POST['nobp_candidate'];
    $nobp_voter = $_POST['nobp_voter'];
    $token = $_POST['token'];
    $query1 = "SELECT * FROM tb_user WHERE nobp = '$nobp_voter' AND token ='$token'";
    $hasil1 = mysqli_query($con, $query1);
    if(mysqli_fetch_array($hasil1)){
        $query3 = mysqli_query($con, "SELECT * FROM tb_status WHERE nobp = '$nobp_voter'");
        if($row = mysqli_fetch_array($query3)){
            if($row['ket'] == 0 || $row['ket1']==0 ){
                $response = new emp();
                $response->status="400";
                $response->message="Please Verified Your Status";
                die(json_encode($response));
            }else if ($row['status'] == 1) {
                $response = new emp();
                $response->status="400";
                $response->message="You Already Vote";
                die(json_encode($response));
            }
        }

        $query = "SELECT * FROM tb_result WHERE nobp_candidate = '$nobp' ";
        $hasil = mysqli_query($con, $query);
        
        $rows = mysqli_fetch_array($hasil);
        if($rows){
            $suara = $rows['jumlah_suara'];
            $suara++;
            $query1 = mysqli_query($con, "UPDATE tb_result SET jumlah_suara='$suara' WHERE nobp_candidate='$nobp'  ");
            $query2 = mysqli_query($con, "UPDATE tb_status SET status='1' WHERE nobp='$nobp_voter'  ");
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
        $response->status="400";
        $response->message="Invalid TOKEN";
        die(json_encode($response));
    }

    
?>