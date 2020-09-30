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
$produkt_id = 0;
$stuecke = "";
$farbe = "";
$preis = "";
$user = 1;
$name = "";
$bes_group_id = "";
$m ="";






if (isset($_POST['save'])) {
    $produkt_id = $_POST['id'];
    $stuecke = $_POST['stuecke'];
    $preis = $_POST['preis'];
    $farbe = $_POST['farbe'];
    $name = $_POST['name'];
    $sql1 = "INSERT INTO bestellungen (benutzer_ID, bestellpreis) VALUES (?,?)";
    $pdo->prepare($sql1)->execute([$user, $preis]);
    $bes_group_id = "select bestellung_ID from bestellungen where bestellung_ID = (select max(bestellung_ID) from bestellungen)";
    //$m = "select @sum :=max(bestellung_ID) from bestellungen";
    $stmt = $pdo->prepare($bes_group_id);
    $stmt->execute();
    $roww = $stmt->fetch();
    $sql = "INSERT INTO transaktionen (produkt_ID, bestellung_group_ID, stuecke, transaction_preis) VALUES (?,?,?,?)";
    $pdo->prepare($sql)->execute([$produkt_id, $roww, $stuecke, $preis]);



    //$_SESSION['message'] = "Neue Benutzer wurde hinzugefügt";
    header('location: einzelprodukt.php');
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $farbe = $_POST['farbe'];
    mysqli_query($pdo, "UPDATE transaktionen SET Anzahl='$stuecke', Preis='$dob', Benutzer_Role_ID='$farbe' WHERE produkt_ID=$produkt_id");
    //$_SESSION['message'] = "Benutzer Infomationen wurde bearbeitet";
    header('location: einzelprodukt.php');
}


?>