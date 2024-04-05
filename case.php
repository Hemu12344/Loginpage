<?php
$age=18;
switch ($age){
    case 12:
    case 13:
    case 14:
    case 15:
    case 16:
    case 17:
        echo "You Are minor";
        break;
    case 18:
        echo "You are eligible";
        break;
    default:
    echo"Error";        

}
?>