<?php include ('connection.php')?>;

<form class="form_2" id=form_2 method="post" action="connection.php" >

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="input-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
    </div>
    <div class="input-group">
        <label for="rolle">Rolle Auswählen</label>
        <select name="rolle" id="rolle" form="form_2" required>

            <!--Select listelerinin elemanlarını veritabanından çekmek için bu SQL kodunu oluşturuyoruz. -->
            <?php

            $res = $pdo->query("select * from produkten where produkt_ID = 1");
            $rows = $res->fetchAll(PDO::FETCH_ASSOC);



            while($row2 = mysqli_fetch_array($res)){
                echo "<option name='rolle' value='".$row2['Benutzer_Role_ID']."'>".$row2['Rollen']."</option>";
            }
            mysqli_free_result($res);
            ?>
             Bir satır edit edildiğinde aşağıdaki option seçeneğini otomatik olarak seçmesini istiyoruz.
             update==true bundan dolayı koşul olarak eklendi. -->
            <?php if ($update == true): ?>
                <option name="rolle" value="<?php echo $rolle; ?>" selected><?php echo $rolle; ?></option>
            <?php endif ?>
        </select>
    </div>

    <div class="input-group">
        <label for="dob">Geburtsdatum</label>
        <input type="date" name="dob" id="dob" value="<?php echo $dob; ?>">
    </div>
    <div class="input-group">
        <?php if ($update == true): ?>
            <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
            <button class="btn" type="submit" name="save" >Add</button>
        <?php endif ?>
    </div>
</form>