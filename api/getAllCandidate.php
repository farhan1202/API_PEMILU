<?php 
    include_once("koneksi.php");
    header("Content-type:application/json");

    class emp{

    }

    $query = "SELECT * FROM tb_candidate";
    $hasil = mysqli_query($con,$query);
    if(mysqli_num_rows($hasil)>0){
        $response = new emp();
        $response1= array();
        while($x = mysqli_fetch_array($hasil)){
            $h['id']=$x['id'];
            $h['nobp_candidate']=$x['nobp_candidate'];
            $h['nama']=$x['nama'];
            $h['jurusan']=$x['jurusan'];
            $h['keterangan']=$x['keterangan'];
            $h['profile_image']=$x['profile_image'];
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