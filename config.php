<!DOCTYPE html>
<html>
<head>

 <title>Control Panel</title>
 <h1>Task II</h1>



<br>
</br>
 <style>
           .button {
        display: inline-block;
        background-color: #A9A9A9;
        border-radius: 15px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
      }
        .button1 {
            background-color: #8B0000;
        } /* Red */
        #for{position:relative;
        top:-30px;left:-110px}
        #bac{position:relative;
        bottom:-30px;left:-190px}


    </style>
</head>
<body>
    <form action="" method="post">
<button type="submit" name="left" class="button" id='lef'>left</button>
<button type="submit" name="stop" class="button1" id='sto'>stop</button>
<button type="submit" name="right" class="button" id='rig'>right</button>
<button type="submit" name="forward" class="button" id='for'>forward</button>
<button type="submit" name="backward" class="button" id='bac'>backward</button>


</form>
</body>
</html>
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
