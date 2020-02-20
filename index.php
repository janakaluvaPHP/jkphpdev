<?php
    require 'dbconnect_foods.php';
?>

<form action="index.php" method="GET">
    Select : <select name="fv">
            <option value="f">Fruits</option>
             <option value="v">Vegetables</option>
          </select>
          <input type="submit" value="Submit">
</form>

<?php

    if(isset($_GET['fv'])){
        $fv = $_GET['fv'];    

        if($fv=='f'){
            echo '<h4>Fruits :</h4>';
        }else{
            echo '<h4>Vegetables :</h4>';
        }
     
        $query = "SELECT name FROM foods WHERE type = '$fv'";

        if($query_run = mysqli_query($mycon, $query)){
            // echo "Success";
            while($row = mysqli_fetch_assoc($query_run)){
                $name = $row['name'];
                echo $name.'<br><br>';
            }
        }else{
            echo "Failed";
        }
    }

?>