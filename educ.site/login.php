<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

MySQL_connect($host,$user,$password);
MySQL_select_db($db);

if(isset($_post['username'])){

    $uname=$_post[ 'username' ];
    $password=$_post['password'];

    $sql="select * from loginform where user='".$uname."' and pass='".password."'";

    $result=mysql_query($sql);

    if(mysql_num_row($result)==1){
        echo "tou have enter";
        exit();
    }
    else{
        echo "you have failed";
        exit();

    }

}






?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOgin</title>
</head>
<body>
    <div class="container">
        <img src="" alt="">
        <form action="#" method="post">
            <div class="form-input">
                <input type="text" name="username" placeholder="enter  your user name" >
            </div>

            <div class="form-input">
                <input type="password" name="password" placeholder="enter  your password" >
            </div>
            <input type="submit" name="submit" value="login" class="btn-log">

        </form>

    </div>
</body>
</html>