
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
            //for line breaks, <br/> or <p>, all html tag works in php
            echo "First paragraph. <br/>";
            echo"<p>Second paragraph. </p>";
            echo "<h1>Third paragraph. </h1>";
            
            ?>
            /* in different style*/
            <p><?php echo "Fourth paragraph."; ?></p>
            <p><?php echo "Fourth paragraph."; ?></p>
            <h1><?php echo "Fourth paragraph."; ?></h1>
            
        </body>
</html>
