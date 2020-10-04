<?php include ('connection.php'); ?>


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
    //$unit_price = $row3['preis'];
    //$stuecke = $row3['anzahl'];
    //$preis = $unit_price * $stuecke;

}
?>
<div class="container mt-5">
    <div class="row">
        <div class="col mt-5">

                <?php
                /*$stmt = $pdo->query("select * from produkten where produkt_ID = $id");
                $row = $stmt->fetch();*/
                echo     "<div class='input-group'><a href='#'>";
                echo      "<img style='margin-right:8%'  name='bilder' width=60% height=90% src='".$row3['bilder_path']."' alt=''></a>  </div>";
                ?>

        </div>
        <div class="col mt-5">
            <form class="form_2" id=form_2 method="post" action="connection.php" >

                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="input-group">
                            <h6  class="my-0" for="name"><?php echo $row3['Produkt_Name']; ?></h6>
                        </div>
                        <span class="text-success" name="name" id="name">
                            <?php //ich möchte mitteilen, ob das Produkt im Lager ist.
                            if($row3['anzahl'] >0){echo "Lager";}
                            else{echo "ausverkauft";}
                            ?>
                        </span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="input-group">
                            <label  class="my-1 mr-2" for="farbe">Farbe</label>
                        </div>
                        <select class="custom-select my-1 mr-sm-2"  name="farbe" id="farbe" form="form_2" required>
                            <option name="farbe" value="<?php echo $row3['produkt_ID']; ?>"><?php echo $row3['farbe']?></option>
                        </select>

                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="input-group">
                            <label  class="my-1 mr-2" for="stuecke">Stück</label>
                        </div>
                            <select  class="custom-select my-1 mr-sm-2" name="stuecke" id="stuecke" form="form_2" required>

                                <!--Select listelerinin elemanlarını veritabanından çekmek için bu SQL kodunu oluşturuyoruz. -->
                                <?php
                                $m = $row3['anzahl'];
                                if($m>0){
                                    //her halükarda max 5 adet alabilsin diye
                                    for($i=1;$i<=$m and $i<=5;$i++){
                                        echo "<option  name='stuecke' value='".$i."'>".$i."</option>";
                                    }
                                }
                                else{
                                    echo "no stock";
                                }

                                ?>
                            </select>

                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="input-group">
                            <label  class="my-1 mr-2" for="groesse">Größe</label>
                        </div>
                        <select class="custom-select my-1 mr-sm-2" name="groesse" id="groesse" form="form_2" required>
                            <option name="groesse" value="<?php echo $row3['produkt_ID']; ?>"><?php echo $row3['groesse'];?></option>
                        </select>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">
                            <?php // hier könnte manche promotionen eingefügt werden
                                echo "-"."&dollar;". "0";
                            ?>
                        </span>

                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="input-group">
                            <label  class="my-1 mr-2" for="preis">Total Preis(Euro) </label>
                            <input type="hidden" name="preis" value="<?php echo $row3['preis']; ?>">
                        </div>
                        <span class="text-right" name="preis" id="preis"><strong><?php echo "&euro;".$row3['preis']; ?></strong></span>
                    </li>
                </ul>
                    <div class="col-auto my-1">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="update" >Warenkorb</button>
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="save" >Kaufen</button>
                    </div>
            </form>
        </div>
    </div>
</div>