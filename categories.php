<?php
require_once 'pdo_connect.php';
$sql='SELECT * FROM categories';
$result= $bdd->query($sql);


?>



<select name="idCat" onchange="chargerProduits(this.value)">
    <?php while($cat=$result->fetch()) {   ?>
    <option value="<?php echo $cat['id_cat']; ?>">
        <?php echo $cat['nom_cat']; ?>
    </option>

    <?php } ?>



</select>

