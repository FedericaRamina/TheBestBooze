<?php
if(!file_exists("html/addProd.html"))
        { header('Location:404.php');exit; }
else echo file_get_contents("html/addProd.html");
?>
