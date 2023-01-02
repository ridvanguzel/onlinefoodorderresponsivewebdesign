<?php

require('..\SeftenYe-Web\connect.php');

if($_POST)
{
    if(isset($_POST['newsletter']))
    {
        
        $newsletter=strip_tags(trim($_POST['newsletter']));
     


       

        $veriekleme=mysqli_query($connect,"INSERT INTO newsletter(newsletter) VALUES ('".$newsletter."')");

       
        header("Location: http://localhost/SeftenYe-Web/index.html");
       
  

    }

    
}

?>