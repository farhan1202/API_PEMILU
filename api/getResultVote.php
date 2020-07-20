<?php
    include_once("koneksi.php");
    header("Content-type:application/json");

    class emp{

    }

    $hasil = mysqli_query($con,"SELECT * FROM suara");
    if(mysqli_num_rows($hasil)>0){
        $response = new emp();
        $response1= array();
        while($x = mysqli_fetch_array($hasil)){
            $h['nobp_candidate']=$x['nobp_candidate'];
            $h['jumlah_suara']=$x['jumlah_suara'];
            $nobp= $x['nobp_candidate'];
            $x1 = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM candidate WHERE nobp_candidate ='$nobp    ' "));
            $h['nama']=$x1['nama'];
            $h['jurusan']=$x1['jurusan'];
            array_push($response1, $h);
        }
        $response->status="200";
        $response->message="Success Fetch Data";
        $response->data=$response1;
        die(json_encode($response));
    }else{
        $response = new emp();
        $response->status="200";
        $response->message="Failed Fetch Data";
        die(json_encode($response));
    }

?>