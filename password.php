<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="style.css" rel="stylesheet" /> 
        <title>Mot de passe pour les infos du serveur central de TF1 </title>
    </head>
    <body>  

 <?php
    if (isset($_POST['password']) AND $_POST['password'] ==  "kangourou") // Mot de passe correct
    {
// nous mettons en places le code suivant :
?>
<h1>Voilà le code :</h1>
        <p><strong>KK09-365I-C585-JDFM-DSFN-78D1-FS28-SFFV</strong></p>   
        
        <p>
        Cette page est pour le personnel de TF1. Attention N'oubliez pas que les codes d'accès sont changés régulièrement.<br />
        TF1 vous remercie de votre visite.
        </p>
        <div id="contenu">
         <p>Cliquez sur valider pour accéder à la discussion instantanée .</p>
            <form action="secret.php" method="post">
                <input type="submit" value="Valider" />
             </form>
       </div>
         <?php
    }
    else // Sinon, message d'erreur
    {
        echo '<p>Mot de passe invalide</p>';
    }
    ?>
</body>
</html>