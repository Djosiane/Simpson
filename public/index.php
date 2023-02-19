<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/pages/index.css">
    <title>Document</title>
</head>
<body>
    <!-- lien php pour la composante HEADER -->
    <?php
        include './components/header.php';
    ?>

    <main class="main-content"> <!--commun à toutes les pages -->

        <!-- 
            proposition de section de présentation non prévue dans le schéma initial de cette page 
            <section class="firm-description">
                <p class="firm-description__paragraph">

                </p>
            </section>
        -->
        
        <section class="principal-section"> <!--commun à toutes les pages -->
            <h1 class="principal-section__heading">Notre équipe</h1> <!--commun à toutes les pages -->
            <!-- lien php pour la composante CARD (presentation équipe) -->
            <?php
                include './components/card.php';
            ?>
        </section>
    </main>
   
    <!-- lien php pour la composante FOOTER -->
    <?php
        include './components/footer.php';
    ?>
    
</body>
</html>