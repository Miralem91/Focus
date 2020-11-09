<?php 

    $dBServername="localhost"; 
    $dBUsername="root"; 
    $dBPassword=""; 
    $dBName="focus_ws";
    
    $conn = mysqli_connect($dBServername,$dBUsername,$dBPassword,$dBName); 
    if(!$conn) {
        die("Connection failed:" .mysqli_connect_error());
    }

