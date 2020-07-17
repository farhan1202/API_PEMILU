<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DBNAME","ebook");
    $con = mysqli_connect(HOST, USER, PASS, DBNAME) or die("unable to connect");

?>