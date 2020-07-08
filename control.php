<!DOCTYPE html>
<html>
<head>
 <title>Control Panel</title>
<br>
</br>
</head>
<body>
    <a href="config.html">Go back</a>
    <?php 
$conn = mysqli_connect('localhost', 'root', '', 'mawaddah');

//check connection
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}

if (isset($_POST['backword'])){
    echo "<p align=center>B</p> ";
    mysqli_query($conn,"INSERT INTO`control` SET `Backword` = 'B'");
}

if (isset($_POST['forword'])){
    echo "<p align=center>F</p> ";
    mysqli_query($conn,"INSERT `control` SET `Farword` = 'F'");
}

if (isset($_POST['right'])){
    echo "<p align=center>R</p> ";
    mysqli_query($conn,"INSERT `control` SET `Right` = 'R'");
}

if (isset($_POST['left'])){
    echo "<p align=center>L</p> ";
    mysqli_query($conn,"INSERT `control` SET `Left` = 'L'");
}
if (isset($_POST['stop'])){
    echo "<p align=center>S</p> ";
    mysqli_query($conn,"INSERT `control` SET `Stop` = 'S'");
}

?>
</body>
</html>




        

