<?php
    require 'dbconnect.php';

    $query = 'SELECT firstname, lastname FROM users ORDER BY id';

    if($query_run = @mysqli_query($mycon, $query)){

        if(mysqli_num_rows($query_run)!=NULL){
            while($row = mysqli_fetch_assoc($query_run)){
                $fname = $row['firstname'];
                $sname = $row['lastname'];
                echo $fname.' '.$sname.'<br>';
            }            
        }else{
            echo 'No user found';
        }
        

    }else{
        echo 'query failed';
    }  
?>

