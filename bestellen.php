<?php include "connection.php"; ?>


<?php
if (isset($_GET['del'])) {
$id = $_GET['del'];
$stmt3 = $pdo->prepare("Delete from transaktionen where bestellung_group_id=$id");
$stmt3->execute();
$stmt2 = $pdo->prepare("DELETE FROM bestellungen WHERE bestellung_ID= $id");
$stmt2->execute();

//$_SESSION['message'] = "Benutzer wurde entfernt!";
header('location: index.php?Bestellungen');
}
//array($id)
?>

<?php /*
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $query = "SELECT Benutzer_ID, Benutzer_Name, DOB, Benutzer_Role_ID FROM bestellungen WHERE Benutzer_ID=$id";
    $record = mysqli_query($db, $query);

    //if (count($record) == 1 ) {
    $n = mysqli_fetch_array($record);
    $name = $n['Benutzer_Name'];
    $dob = $n['DOB'];
    $rolle = $n['Benutzer_Role_ID'];
    //}
}*/
?>


<script>
    function toggle(source) {
        //var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const checkboxes = document.querySelectorAll(".user_list1");
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] !== source)
                checkboxes[i].checked = source.checked;
        }
    }
</script>

<div style="min-height:1000px;">
    <div>
        <h2>Bestellungen</h2>
    </div>

    <div>
    <form method="post" action="connection.php">
        <table class="table table-striped text-monospace">
            <caption>BESTELLUNGEN<br><br></caption>
            <thead>
            <th><label for="select_all_checkbox"></label><input class="form-check-input" type="checkbox" id="select_all_checkbox" onclick="toggle(this);"></th>
            <th>Bestellungesnummer</th>
            <th>ProduktName</th>
            <th>Farbe</th>
            <th>Größe</th>
            <th>Einzelpreis</th>
            <th>Stück</th>
            <th>Gesamtpreis</th>
            <!-- <th>Edit</th> -->
            <th>Stornieren</th>
            </thead><br>
            <tbody>
            <?php

            // Attempt select query execution

            $stmt = $pdo->prepare("select b.bestellung_ID , p.Produkt_Name, p.farbe, p.groesse, p.bilder_path,
                p.preis as Unit_Price, t.stuecke, b.bestellpreis from bestellungen b 
                JOIN transaktionen t on b.bestellung_ID = t.bestellung_group_id
                JOIN produkten p on t.produkt_ID = p.produkt_ID");

            $stmt->execute();

            if($stmt->rowCount()>0){
                //if($row > 0){
                    while($row = $stmt->fetch()){
                        echo "<tr class='rows'>";
                        echo "<td class='user_list'><input class='user_list1' type='checkbox' name='checkbox[]' value='".$row['bestellung_ID']."'></td>";
                        echo "<td class='user_list'>" . $row['bestellung_ID'] . "</td>";
                        echo "<td class='user_list'>" . $row['Produkt_Name'] . "</td>";
                        echo "<td class='user_list'>" . $row['farbe'] . "</td>";
                        echo "<td class='user_list'>" . $row['groesse'] . "</td>";
                        echo "<td class='user_list'>" . $row['Unit_Price'] . "</td>";
                        echo "<td class='user_list'>" . $row['stuecke'] . "</td>";
                        echo "<td class='user_list'>" . $row['bestellpreis'] . "</td>";
                        //echo "<td class='user_list'><a href='bestellen.php?edit=".$row['bestellung_ID']."#form_2' class='edit_btn'>Edit</a></td>";
                        echo "<td class='user_list'><a href='bestellen.php?del=".$row['bestellung_ID']."' class='btn btn-outline-danger'>Stornieren</a></td>";
                        echo "</tr>";
                    }
                }
            /*else{
                    echo "No records matching your query were found.";
                }}*/
            else{
                echo "No orders matching your account were found.";
            }

            ?>

            </tbody>
        </table>
        <table class="control">
            <tr class="del_sel_button">
                <td><label for="select_all_checkbox"></label><input class="form-check-input" type="checkbox" id="select_all_checkbox" onclick="toggle(this);">Check All</td>
                <td class="button"><input type="submit" class="btn btn-outline-danger ml-3" name="delete" id="delete" value="Stornieren Ausgewählte Bestellungen"></td>
            </tr>
        </table>
    </form>
    </div>
</div>
