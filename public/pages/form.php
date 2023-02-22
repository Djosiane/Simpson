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
            <h1 class="principal-section__heading">Vous avez un projet, une question? Nous serions ravis d'en discuter.</h1> <!--commun à toutes les pages -->
            <form action="redir_form.php" class="contact-form" method="post">
                <fieldset class="inputs-field">
                    <legend class="field-legend">Ecrivez-nous</legend>
                    <div class="fnma-div">
                        <!-- <label for="fname">Prénom</label> -->
                        <input type="text" id="fname" name="fname" placeholder="Prénom">
                    </div>
                    <div class="lname-div">
                        <!-- <label for="lname">Nom</label> -->
                        <input type="text" id="lname" name="lname" placeholder="Nom">
                    </div>
                    <div class="projet-div">
                        <select name= "projet" id= "projet" required >
                            <option value="" selected disabled hidden>Mon projet</option>
                            <option value="logo">J'ai besoin d'un logo</option>
                            <option value="site_web">J'aimerais un site web</option>
                            <option value="nom">Je cherche un nom d'entreprise</option>        
                        </select>
                    </div>
                    <div class="email-div">
                        <!-- <label for="email">Email:</label> -->
                        <input type="email" id="email" name="email" placeholder="exemple@email.fr">
                    </div>
                    <div class="message-div">
                        <!-- <label for="message">Votre message</label> -->
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Ecrivez votre message ici"></textarea>
                    </div>       
                
                    <input type="submit" value="Envoyer">
                </fieldset>
            </form>
      
        </section>
    </main>

    <!-- lien php pour la composante FOOTER -->
    <?php
        include '../components/footer.php';
    ?>
    
    
</body>
</html>