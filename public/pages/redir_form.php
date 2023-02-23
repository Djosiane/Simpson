<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/pages/redir_form.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Anton" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
      <!-- lien php pour la composante HEADER -->
      <?php
        include '../components/header.php';
        ?>


    <main class="main-content"> <!--commun à toutes les pages -->
        <section class="principal-section"> <!--commun à toutes les pages -->
            <h1 class="principal-section__heading">Message transmis!</h1> <!--commun à toutes les pages -->
            <div class="thanks-message">
                <p>
                 <?php 
                    echo 'Merci ' . $_POST['fname'] . ' ' . $_POST['lname'] . ', The Simpson Agency te recontacte rapidement sur ton mail ' . $_POST['email'];
                ?>
                </p>
            </div>
                <div class="family_img">
                <img src="/images/bw_simpsons.jpg" alt="image de famille"/>
            </div>
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