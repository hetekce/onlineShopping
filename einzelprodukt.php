<?php include ('connection.php');
require_once "header.php";
include("nav.php");
?>


<?php
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $stmt = $pdo->prepare("SELECT * FROM produkten WHERE produkt_ID=$id");
    $stmt->execute();

    $row3 = $stmt->fetch();
    $bilder = $row3['bilder_path'];
    $farbe = $row3['farbe'];
    $groesse = $row3['groesse'];
    $name = $row3['Produkt_Name'];
    $preis = $row3['preis'];
    $stuecke = $row3['anzahl'];
}
?>

    <div class="container" style="min-height: 500px; margin-left: 50px; margin-top: 50px; ">
        <a href='index.php?Alle=true'>Alle</a>
        <a href='index.php?Damen=true'>Damen</a>
        <a href='index.php?Herren=true'>Herren</a>
        <a href='index.php?Kinder=true'>Kinder</a>
        <?php
        function Damen() {
            include("damen.php");
        }
        function Herren() {

            include("herren.php");
        }
        function Kinder() {
            include("kinder.php");
        }
        if (isset($_GET['Alle'])) {
            Alle();
        }

        if (isset($_GET['Damen'])) {
            Damen();
        }
        if (isset($_GET['Herren'])) {
            Herren();
        }
        if (isset($_GET['Kinder'])) {
            Kinder();
        }
        function Alle() {
            include("alle.php");
        }
        ?>
        <div class="row">
            <div class="col">

                <form class="form_2" id=form_2 method="post" action="connection.php" >
                    <div class="float-left">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <?php
                        $stmt = $pdo->query("select * from produkten where produkt_ID = $id");
                        $row = $stmt->fetch();
                        echo     "<div class='input-group'><a href='#'>";
                        echo      "<img align=left style='margin-right:8%'  name='bilder' width=60% height=90% src='".$row['bilder_path']."' alt=''></a>  </div>";
                        ?>
                    </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <label for="name">Produkt Name: </label>
                    <span name="name" id="name"><?php echo $row3['Produkt_Name']; ?></span>
                </div>


                <div class="input-group">
                    <label for="farbe">Farbe</label>
                    <select name="farbe" id="farbe" form="form_2" required>
                        <option name="farbe" value="<?php echo $row3['produkt_ID']; ?>"><?php echo $row3['farbe']?></option>
                    </select>
                </div>


                <div class="input-group">
                    <label for="stuecke">Stück</label>
                    <select name="stuecke" id="stuecke" form="form_2" required>

                        <!--Select listelerinin elemanlarını veritabanından çekmek için bu SQL kodunu oluşturuyoruz. -->
                        <?php

                        $m = $row3['anzahl'];

                        if($m>0){
                            //her halükarda max 5 adet alabilsin diye
                            for($i=1;$i<=$m and $i<=5;$i++){
                                echo "<option name='stuecke' value='".$row3['produkt_ID']."'>".$i."</option>";

                            }
                        }
                        else{
                            echo "no stock";
                        }

                        ?>
                    </select>
                </div>

                <div class="input-group">
                    <label for="groesse">Größe</label>
                    <select name="groesse" id="groesse" form="form_2" required>
                        <option name="groesse" value="<?php echo $row3['produkt_ID']; ?>"><?php echo $row3['groesse'];?></option>
                    </select>
                </div>


                <div class="input-group">
                    <label for="preis">Preis: </label>
                    <input type="hidden" name="preis" value="<?php echo $row3['preis']; ?>">
                    <span name="preis" id="preis"><?php echo $row3['preis']." Euro"; ?></span>
                </div>

                <div class="input-group">
                    <button class="btn btn-outline-success mr-3" type="submit" name="update" >Warenkorb</button>
                    <button class="btn btn-outline-success" type="submit" name="save" >Kaufen</button>
                </div>
            </div>
            </form>
        </div>
    </div>
<?php include ('footer.php'); ?>