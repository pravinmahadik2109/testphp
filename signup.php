<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'dbconnect.php';
$username=$_POST['uname'];
$password=$_POST['pwd'];

$sql='insert into user (`username`,`password`,`date_created`) values('.$username.",".$password.",".current_timestamp().")";


echo $sql;
$result=mysqli_query($conn,$sql);
if($result)
echo 'Comgratulations !! Sign Up Suucessfull';
else
echo 'Errror'.mysqli_error($conn);

}

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Signup Page</h1>
        <form method="post" action="">
            Username <input type="text" name="uname"><br> 
            Password <input type="password" name="pwd"><br>
            <input type="submit" value="Sign Up">
        </form>
    </body>

    </html>