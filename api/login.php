<?php
    include_once('koneksi.php');
    header("Content-type:application/json");

    class emp{}

    $nobp = $_POST['nobp'];
    $password = md5($_POST['password']);

    if ((empty($nobp))||(empty($password))) {
        $response = new emp();
        $response->STATUS="200";
        $response->MESSAGE="Pastikan data terisi";
        die(json_encode($response));
    }

    $random = generateRandomString();
    $query1 = mysqli_query($con, "UPDATE user SET token = '$random' WHERE nobp ='$nobp'");  
    $query = mysqli_query($con, "SELECT * FROM user WHERE nobp='$nobp' AND password='$password'");

    $row = mysqli_fetch_array($query);
    if ($row) {
        $response = new emp();
        $response1 = new emp();
        $response1->nobp = $row['nobp'];
        $response1->nama = $row['nama'];
        $response1->token = $row['token'];

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

    function generateRandomString($length = 30) {
        $characters = '0123456789abcdefghijklmnopqrs092u3tuvwxyzaskdhfhf9882323ABCDEFGHIJKLMNksadf9044OPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

?>