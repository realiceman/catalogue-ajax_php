<?php
require_once 'pdo_connect.php';
if(isset($_GET['idCat'])){
$sql="SELECT * FROM produits WHERE id_cat= :idc ";
$result= $bdd->prepare($sql);
$result->bindValue(':idc',  $_GET['idCat'], PDO::PARAM_INT);
$result->execute();
}else{
    
    $sql="SELECT * FROM produits ";
    $result= $bdd->query($sql);
    
}
?>



<table border="1" width="80%">
   <tr>
       <th>Id PROD</th> <th>NOM PROD</th> <th>PRIX</th>
    
    </tr>


    <?php while($p=$result->fetch()) {   ?>
    <tr>
     <td><?php echo $p['id_prod']; ?></td>
     <td><?php echo $p['nom_prod']; ?></td>
     <td><?php echo $p['prix']; ?></td>
    </tr>

    <?php } ?>
    <!-- test comment-->
 </table>

