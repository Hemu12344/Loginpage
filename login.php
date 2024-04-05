<?php
if(isset($_POST['submit'])){
    $uname=$_POST['name'];
    $uemail=$_POST['email'];
    $umob=$_POST['phone'];
    $upass=$_POST['password'];
    $urepass=$_POST['repassword'];

    $server="localhost";
    $username="root";
    $password="Hemu1234@";
    $database="loginform";

    $conn=mysqli_connect($server,$username,$password,$database);
    $create="INSERT INTO `userdata`    VALUES ('$uname','$uemail','$umob','$upass','$urepass')";
    if(strlen($umob)>10){
        die ("Mobile numer is wrong");
    }
    if($upass!=$urepass){
        die ("Password Not match");
    }
    else{
        echo "";
    }
    $query=mysqli_query($conn,$create);
        if($query){
             echo "Registration Successful";
        }
        else{
            echo "Syntax error".mysqli_error($query);
        }
}
?>