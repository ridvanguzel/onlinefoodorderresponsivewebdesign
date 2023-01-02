<?php

require('..\SeftenYe-Web\connect.php');

if($_POST)
{
    if(isset($_POST['email'])){
      
        $password=strip_tags(trim($_POST['password']));
        $email=strip_tags(trim($_POST['email']));
       

        $sorgula=mysqli_query($connect, "SELECT * FROM chefsname WHERE email='".$email."' AND password='".$password."'");


        if(mysqli_num_rows($sorgula)>0){
            
            while ($row=mysqli_fetch_assoc($sorgula))


            header("Location: http://localhost/SeftenYe-Web/index.html");
        }

        else{
            echo"Giris Basarisiz!";
        }



    }
}

?>