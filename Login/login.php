<?php

$host = "localhost";
$user = "root"
$password = ""
$db = "sh oppn"

mysql_connect($host, $user, $password);
mysql_select_db($db);

if(isset(['username'])){
    $name=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from sh oppn where user='".$name."'AND Pass='".$password."'
    limit l";

    $myresult=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo "login successful";
        exit();

    }
    else{
        echo "password incorrect"
    }
}

?>