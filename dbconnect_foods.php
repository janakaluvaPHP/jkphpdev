<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'test2';

    if($mycon = @mysqli_connect($host,$user,$pass)){
        // echo 'Connected to the server <br>';

        if(@mysqli_select_db($mycon, $dbname)){
        //    echo 'Connected to DB<br>';
        }else{
            echo 'Connected to DB Failed';
        }

    }else{
        echo 'Connected Failed';
    }

?>

