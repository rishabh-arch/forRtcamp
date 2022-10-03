<?php
        $username="root";//Enter here your user name.
        $password="";//Enter password here
        $database="visitor_det";//Enter database name here
    
        $mysqli=NEW MySQLi('localhost',$username,$password,$database);
    $query = '';
    $sqlScript = file('visitor_det.sql');
    // foreach ($sqlScript as $line)	{
        
    //     $startWith = substr(trim($line), 0 ,2);
    //     $endWith = substr(trim($line), -1 ,1);
        
    //     if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
    //         continue;
    //     }
            
    //     $query = $query . $line;
    //     if ($endWith == ';') {
    //         mysqli_query($mysqli,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
    //         $query= '';		
    //     }
    // }
    // echo '<div class="success-response sql-import-response">SQL file imported successfully</div>';


    
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mymysqli->connect_error);
      }
    else{
        echo "Connected successfully";
    }

?>