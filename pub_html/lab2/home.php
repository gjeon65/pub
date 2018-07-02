<html>
    <head>
        <meta charset="UTF-8" />
        <title>lab2</title>
        
    </head>


    <body>
           <?php
           
            error_reporting(E_ALL);
            session_start();
          
            echo "starting php";
            echo "</br>";
            
            $dsn = 'mysql:host=wilbury.cs.drexel.edu;dbname=gj65_info152_201602';
            $username = 'gj65';
            $password = 'gdjzvpttmq';
            $db = new PDO($dsn,$username,$password);
            echo "troubleshooting, right after connect to sql";
            //troubleshooting
            $query = $db->query('SELECT * FROM programs');
            
            while($r = $query->fetch()){
                echo $r['message'], '<br>';
            }
           //end troubleshooting
           $_SESSION["admin"] = $_POST["admin"];
            //checking error
            echo "<p>checking</p>";
            
            function get_programs(){
                global $db;
                $statement = "select * from programs";
                $data = $db ->query($statement);
                return $data;
            }

            get_programs();
            ?>

            <?php

            foreach($programs as $p){
                $id = $p["id"];
                $name = $p["name"];

                echo "<p><a href='student.php?pid=$id'>$name</a></p>";
            } 
            ?>
    </body>        

</html>