<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/pages/index.css">
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/components/footer.css">

    <title>Document</title>
</head>
<body>
    <!-- lien php pour la composante HEADER -->
    <?php
        include './components/header.php';
    ?>

    <main class="main-content"> <!--commun à toutes les pages -->

        <section class="firm-description">
            <h1 class="firm-description__heading">L'AGENCE</h1>
            <p class="firm-description__paragraph">SIMPSON AGENCY est une agence de graphisme peuplé de créateurs inspirés, visionnaires et responsables. Nous sommes reconnus dans les domaines de la culture, le design, la gastronomie et du tourisme. L'agence affirme sa réputation d'entreprise exemplaire à travers des réalisations soignées, fluides et plusieurs fois récompensées. Nous travaillons main dans la main pour faire éclore des experiences graphismes uniques eet mémorables. </p>
        </section>

        <section class="principal-section"> <!--commun à toutes les pages -->
            <h2 class="principal-section__heading">Une team passionnée et experimentée.</h2> <!--commun à toutes les pages -->
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