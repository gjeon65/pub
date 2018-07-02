
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
            
            echo "it works at the beggining";
            $a = 0/0;
            echo "it works before IF statement";
            // if abc $a;
            echo "it works after IF statement";
            echo "First paragraph";
            echo"Second paragraph";
            echo "Third paragraph";
            ?>
        </body>
</html>
