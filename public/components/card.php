<?php
require_once './_connec.php';

$pdo = new \PDO(DSN, USER, PASS);

// A exécuter afin de tester le contenu de votre table  simpsons_family
$getArray = "SELECT * FROM simpsons_family";
$statement = $pdo->query($getArray);
if($statement === false){
    var_dump($pdo->errorInfo());
    die("Erreur SQL");
}

// On veut afficher notre résultat via un tableau objet (PDO::FETCH_OBJ)
$simpsonsObject = $statement->fetchAll(PDO::FETCH_OBJ);

?>
<div class="cards-container">
    
    <?php foreach($simpsonsObject as $member):?>
        <div class="card">
          <img class="card__image" src="<?=$member->image?>" alt="Photo membre d'équipe">
        <div class="card__label">
        <h3 class="card__heading"><?= $member->name ?></h3>
        <p class="card__p"><?= $member->bio ?></p>
        </div>
    <?php endforeach?>
     
   
</div>

