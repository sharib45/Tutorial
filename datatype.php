<?php

// 1 string

echo " </br> 1  string example </br>";
$name = "sharib";


echo $name;

echo "</br>";

echo var_dump($name);

//2 number

echo " </br>2 num example </br>";




$num = 10;

echo $num;

echo "</br>";
echo var_dump($num);


//3 float

echo " </br>3  float example </br>";

$float_num =2.10;

echo $float_num;

echo "</br>";
echo var_dump($float_num);




//4 boolean

echo " </br>4  boolean example </br>";

$bool =true;

echo $bool;

echo "</br>";
echo var_dump($bool);


//5 boolean

echo " </br>5  null example </br>";

$null = NULL;;

echo $null;

echo "</br>";
echo var_dump($null);


//6 array

echo " </br>6  array example </br>";

$arr = ["sharib","shibli",45];



echo "</br>";
echo var_dump($arr);


//7 object class array

echo " </br>7  object(class) example </br>";


//$user = new userexamole();



echo "</br>";
//echo var_dump($user);



//8 object class array

echo " </br>8  object(class) example </br>";


//$user = new userexamole();



echo "</br>";
//echo var_dump($user);



//9 resource class array

echo " </br>9  resource example sss </br>";


$connection = ftp_connect("localhost") or die("local host not found");




echo var_dump($connection);


echo " </br>10  resource example </br>";

$ftp_server = "localhost";

$ftp_connection = ftp_connect($ftp_server)
    or die("Could not connect to $ftp_server");

echo var_dump($ftp_connection);



?>