<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" /> 
    </head>
<body>
     <h1>Bienvenue sur tf1 !</h1>
        <p>Les News de tf1 :</p>
<?php
//Mise ne place pour la Connexion à la base de données 
try
    {
         $bdd = new PDO('mysql:host=localhost;dbname=tf1;charset=utf8', 'root', '');
    }
catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM tf1 ORDER BY date_creation DESC LIMIT 0, 5');

while ($donnees = $req->fetch())
    {
?>
    <div class="news">
         <h3>
            <?php echo htmlspecialchars($donnees['titre']); ?>
            <em>le <?php echo $donnees['date_creation_fr']; ?></em>
        </h3>
    
    <p>
        <?php
            // On affiche le contenu du billet
        echo nl2br(htmlspecialchars($donnees['contenu']));
        ?>
   
    <br />
        <em><a href="comentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
    </p>
</div>

<?php
    } // Fin de la boucle des billets

$req->closeCursor();
?>
<p> Veuillez entrer le mot de passe pour accéder au fichier <strong>secret.php</strong></p>
<form action="password.php" method="post">
            <p>
            <input type="password" name="password" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p> Si vous ne travaillez pas chez TF1 ;) , inutile d'insister vous ne trouverez jamais le mot de passe ! pour accéder au archives du JT;-)</p>
         <img src="images/logo.png" alt="Photo de TF1" title="TF1"/>
</body>
</html>