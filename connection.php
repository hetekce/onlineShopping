<?php
include ("config.php");
try {


    $pdo = new  PDO($dsn,$username,$password);

    //  echo "Connected successfully";

    // while ($row = $stmt->fetch()) {
    //echo $row['Benutzer_ID']."<br />\n";

}

catch (PDOException $e){
    echo $e->getMessage();
}

?>