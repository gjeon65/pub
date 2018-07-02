<html>
    <head>
        <meta charset="UTF-8" />
        <title>lab2</title>
    </head>
    
        <?php
        session_start();
        $dsn='mysql:host=wilbury.cs.drexel.edu;dbname=gj65_info152_201602';
        $username="gj65";
        $password="gdjzvpttmq";
        $db = new PDO($dsn,$username,$password);
        
        function get_students_in_program($pid){
            global $db;
            $statement = "select * from students where program_id=$pid";
            $data = $db ->query($statement);
            return $data;
        }
        $clickedPID = $_GET["pid"];
        
        $students = get_students_in_program($pid);
        
        $_SESSION["admin"] = $_POST["admin"];
        ?>
    

</html>