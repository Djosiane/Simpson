<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <!-- lien php pour la composante HEADER -->
      <?php
        include '../components/header.php';
        ?>


    <main class="main-content"> <!--commun à toutes les pages -->
        <section class="principal-section"> <!--commun à toutes les pages -->
            <h1 class="principal-section__heading">Merci!</h1> <!--commun à toutes les pages -->
            <p class="thanks-message">
                <?php 
                    echo 'Merci ' . $_POST['fname'] . ' ' . $_POST['lname'] . ', nous te recontacons rapidement sur ton mail ' . $_POST['email'];
                ?>
            </p>
            <button class="redir-home">
                <a href="../index.php" class="redir-home__link">
                    Retour à l'accueil
                </a> 
            </button>
      
        </section>
    </main>

    <!-- lien php pour la composante FOOTER -->
    <?php
        include '../components/footer.php';
    ?>
    
    
</body>
</html>