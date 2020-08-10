<?php

include_once("koneksi.php");
    header("Content-type:application/json");
ini_set('date.timezone', 'Asia/Jakarta');
$now = new DateTime();
class emp{

}

$idfinger = $_GET['idfinger'];

	$datenow = $now->format("Y-m-d H:i:s");

	$hasil = mysqli_query($con, "SELECT * FROM tb_status WHERE idfinger = '$idfinger' ");
	$row = mysqli_fetch_array($hasil);
	
	if (mysqli_num_rows($hasil) === 1 ){
		// echo "ID  :", $row["idfinger"];

		$sql = "UPDATE tb_status SET ket1 = '1', date = '$datenow'  WHERE idfinger = '$idfinger' ";
		$result = mysqli_query($con, $sql);
		if (!$result) {
			die('Invalid query: ');
		}	else{
            $response = new emp();
            $response->status="200";
            $response->message="Scanning Success";
            die(json_encode($response));
        }
	}

	else {
		echo "%none";
	}	
	
mysqli_close($con);


?>