<?php

require('..\SeftenYe-Web\connect.php');

if($_POST)
{
    if(isset($_POST['email']))
    {
        $name=strip_tags(trim($_POST['name']));
        $surname=strip_tags(trim($_POST['surname']));
        $companyname=strip_tags(trim($_POST['companyname']));
        $password=strip_tags(trim($_POST['password']));
        $email=strip_tags(trim($_POST['email']));
        $phonenumber=strip_tags(trim($_POST['phonenumber']));


       

        $veriekleme=mysqli_query($connect,"INSERT INTO chefsname(name, surname, companyname, password, email, phonenumber) VALUES ('".$name."','".$surname."','".$companyname."','".$password."','".$email."','".$phonenumber."')");

       
        header("Location: http://localhost/SeftenYe-Web/index.html");
       
  

    }

    
}

?>