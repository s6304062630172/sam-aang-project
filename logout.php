<?php 
    session_start();
    session_destroy();
    
?>
<html>
    <head></head>
    <body>
        <?php
         header("location:homepage.php"); 
        ?>
    </body>
</html>