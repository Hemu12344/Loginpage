<?php
$server='localhost';
$username='root';
$password='Hemu1234@';
$database='loginform';
$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
    echo "Connet Success"."<br>";
}
else{
    echo "Error to Connect error is".mysqli_connect_error($conn);
};
$system="ALTER TABLE `userdata` ADD PRIMARY KEY (uemail)";
$run=mysqli_query($conn,$system);
echo "Run Success"."$run"
?>