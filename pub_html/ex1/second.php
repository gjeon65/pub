
<?php
//this will report errors but not syntax error
error_reporting(E_ALL);
ini_set('display_error', 'on');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Simple PHP</title>
        
        </head>
        <body>
            
            <?php
            
            $ps = array("First","Second","Third");
            foreach($ps as $p){
                echo "<p>". $p ."</p>";
                echo "<p>$p"." paragraph </p>";
            }
            ?>
        </body>
</html>
