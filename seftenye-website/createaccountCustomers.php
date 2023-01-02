<?php

require('..\SeftenYe-Web\connect.php');

if($_POST)
{
    if(isset($_POST['email2']))
    {
        $name2=strip_tags(trim($_POST['name2']));
        $surname2=strip_tags(trim($_POST['surname2']));
        $password2=strip_tags(trim($_POST['password2']));
        $email2=strip_tags(trim($_POST['email2']));
        $phonenumber2=strip_tags(trim($_POST['phonenumber2']));
        

       

        $veriekleme=mysqli_query($connect,"INSERT INTO customernames (name2, surname2, password2, email2, phonenumber2) VALUES ('".$name2."','".$surname2."','".$password2."','".$email2."','".$phonenumber2."')");
     
        header("Location: http://localhost/SeftenYe-Web/subscribing.html");
	

    }
}


?>