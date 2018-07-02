
<?php
//this will report errors but not syntax error
error_reporting(E_ALL);
ini_set('display_error', 'on');
//connect to database
$dsn = "mysql:host=twilbury.cs.drexel.edu;dbname=gj65";
        $username = "gj65";
        $password = "gdjzvpttmq";
        
$db = new PDO($dsn,$username,$password);
$sql = "select * from categories"; //categories is the db name
$cats = $db->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Simple PHP</title>
        
        </head>
        <body>
            <ul>
            <?php
            
            foreach($cats as $cat){
                echo "<li>";
                echo $cat['id'] . " ";
                echo $cat['name'];//square bracket is the method that 
                //you use for getting things from categories
                echo "</li>";
            }
            
            ?>
            </ul>
        </body>
</html>
