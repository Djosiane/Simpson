<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header> 
        <!--commun à toutes les pages -->    
        <!-- partie à réaliser par josiane -->
    </header>

    <main class="main-content"> <!--commun à toutes les pages -->
        <section class="principal-section"> <!--commun à toutes les pages -->
            <h1 class="principal-section__heading">Contactez-nous</h1> <!--commun à toutes les pages -->
            <form action="redir_form.php" class="contact-form">
                <fieldset class="inputs-field">
                    <legend class="field-legend">Vous avez une question?</legend>
                    <div class="fnma-div">
                        <!-- <label for="fname">Prénom</label> -->
                        <input type="text" id="fname" name="fname" placeholder="Prénom">
                    </div>
                    <div class="lname-div">
                        <!-- <label for="lname">Nom</label> -->
                        <input type="text" id="lname" name="lname" placeholder="Nom">
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

    <footer>
        <!--commun à toutes les pages -->    
        <!-- partie à réaliser par josiane -->
    </footer>
    
</body>
</html>