<?php  global $conn;
        $servername = "sql312.epizy.com";  
        $username = "epiz_25031589";  
        $password = "CNqe7A99hQD6w";  
        $db='epiz_25031589_mtbs';
        $conn = mysqli_connect($servername,$username, $password, $db);
        if ( $conn->connect_error) {
            die("Connection failed: " .$conn->connect_error);
                   }
       
?>
