<?php

include_once("koneksi.php");
    header("Content-type:application/json");
ini_set('date.timezone', 'Asia/Jakarta');
class emp{

}
$now = new DateTime();

$idcard = $_GET['idcard'];
	
	$datenow = $now->format("Y-m-d H:i:s");

	$hasil = mysqli_query($con, "SELECT * FROM tb_status WHERE idcard = '$idcard' ");
	$row = mysqli_fetch_array($hasil);
	
	if (mysqli_num_rows($hasil) === 1 ){
		echo "ID CARD :", $row["idcard"];

		$sql = "UPDATE tb_status SET ket = '1', date = '$datenow' WHERE idcard = '$idcard' ";
		$result = mysqli_query($con, $sql);
		
		if (!$result) {
			die('Invalid query: ');
		}else{
            $response = new emp();
            $response->status="200";
            $response->message="Scanning Success";
            die(json_encode($response));
        }
	}

	else {
		echo "%none"; //yg di ubah di codingan arduino
	}	
	
mysqli_close($con);


?>