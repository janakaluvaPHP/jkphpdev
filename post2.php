<?php

print_r($_POST);
if ($_POST['date']) {
  $date = $_POST['date'];
  $time = $_POST['time'];
  echo '<h1>' . $date . '---' . $time . '</h1>';
}
else {

}
?>