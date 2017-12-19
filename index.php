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