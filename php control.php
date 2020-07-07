<?php 
//PHP Code goes here 

//connect to database--conned the whole databassees not just the table!
$conn = mysqli_connect('localhost', 'root', '', 'mawaddah');

//check connection
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}


if (isset($_POST['backward'])){
    echo "<p align=center>B</p> ";
    mysqli_query($conn,"INSERT INTO`control panel` SET `Backward` = 'B'");
}

if (isset($_POST['forward'])){
    echo "<p align=center>F</p> ";
    mysqli_query($conn,"INSERT `control panel` SET `Farward` = 'F'");
}

if (isset($_POST['right'])){
    echo "<p align=center>R</p> ";
    mysqli_query($conn,"INSERT `control panel` SET `Right` = 'R'");
}

if (isset($_POST['left'])){
    echo "<p align=center>L</p> ";
    mysqli_query($conn,"INSERT `control panel` SET `Left` = 'L'");
}
if (isset($_POST['stop'])){
    echo "<p align=center>S</p> ";
    mysqli_query($conn,"INSERT `control panel` SET `Stop` = 'S'");
}

?>
