<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSED Login</title>
    <style>
        body{
            background-image: url(https://cdn.pixabay.com/photo/2016/03/22/15/29/blue-1273089_1280.jpg);
            
        }
        legend{
            text-align: center;
        }
        .form{
             margin-left: 500px;
        }
        #name{
            margin-top: 5px;
            border-radius:5px;
            text-decoration-color: transparent;
            padding: 5px; margin-right: 180px;
            
           
        }
        #email{
            margin-top: 5px;
            border-radius:5px;
            text-decoration-color: transparent;
            padding: 5px; margin-right: 180px;
        
        }
        #phone{
            margin-top: 8px;
            border-radius:5px;
            text-decoration-color: transparent;
            padding: 5px;
            margin-right: 180px;
        }
        #password{
            margin-top: 8px;
            border-radius:5px;
            background-color: transparent;
            text-decoration-color: transparent;
            padding: 5px;
            margin-right: 180px;
        }
        #repassword{
            margin-top: 8px; 
            border-radius:5px;
            text-decoration-color: transparent;
            padding: 5px;
            margin-right: 180px;
        }
        button{
            margin-top: 5px; border-radius:5px;
            text-decoration-color: transparent;
            padding: 5px;
            
        }
        .btn-1{
            margin-left:px; border-radius:5px;
            background-color: transparent;
            padding-left: 16px;
            text-align: center;
            padding-right: 21px;
        }
        .btn-2{
            margin-right:15px; border-radius:5px;
            background-color: transparent;
        }
        a{
            text-decoration: none;
            margin-right:5px;
            color:rgb(000, 000,000)
        }
        .name{
            margin-left:;
        }
        p{
            margin: top 0px;
        }
        .btn-3{
            margin-top:10px;
            position:absolute;
            padding-left: 50px;
            padding-right: 45px;
            
        }
        fieldset{
            height: 350px;
        }

    </style>
</head>
<body>
    <fieldset>
        <legend>CSED Pvt.Ltd User registration</legend>
        <div class="form" >
            <form method="POST" action="">
                <input type="text" name="name" id="name"style="background-color:transparent;" required placeholder="User name"> <br>
                <input type="email" name="email" id="email" style="background-color:transparent;" required placeholder="Email"> <br>
                <input type="number" name="phone" id="phone"style="background-color: transparent;" required placeholder="Phone"><br>
                <input type="password" name="password" id="password" style="background-color:transparent;"required placeholder="Password"><br>
                <input type="password" name="repassword" id="repassword" style="background-color:transparent;"required placeholder="Re-Pass"><br>
                <button type="submit" class="btn-1" name="submit">Sign Up</button>
                <button type="reset" class="btn-2">Reset Page</button><br> 
                <button class="btn-3" style="background-color: transparent;margin-right: 200px;"><a href="#">Login Now ?</a></button>
            </form>
        </div>
    </fieldset>
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
    if($query==$uname){
        die ("Not exist");
    }
        if($query){
             echo "Registration Successful";
        }
        else{
            echo "Syntax error";
        }
}
?>
</body>
</html>
