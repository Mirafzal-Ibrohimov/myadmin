<?php

$bd = mysqli_connect('localhost','root','','myadmin');

if ($bd == TRUE) {
    echo('+ + +');
}else{
    echo('- - -');
}
?>