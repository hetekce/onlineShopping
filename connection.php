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



// initialize variables
$name = "";
$dob = "";
$rolle = "";
$id = 0;
$update = false;

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $rolle = $_POST['rolle'];

    mysqli_query($db, "INSERT INTO benutzer (Benutzer_Name, DOB, Benutzer_Role_ID) VALUES ('$name', '$dob', '$rolle')");
    $_SESSION['message'] = "Neue Benutzer wurde hinzugefügt";
    header('location: benutzer.php');
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $rolle = $_POST['rolle'];
    mysqli_query($db, "UPDATE benutzer SET Benutzer_Name='$name', DOB='$dob', Benutzer_Role_ID='$rolle' WHERE Benutzer_ID=$id");
    $_SESSION['message'] = "Benutzer Infomationen wurde bearbeitet";
    header('location: benutzer.php');
}

?>