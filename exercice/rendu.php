 <html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire php</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="rendu.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </head>
   


<?php

include('class.php');

if(isset($_POST['form_animal']))
{
	$nomanimal = ($_POST['nomanimal']);
    $nameproprio = ($_POST['nomproprio']);
	$mail = ($_POST['email']);
	$datedentree = ($_POST['date_entree']);
    $soins = ($_POST['naturesoins']);
	$commentairestexte = ($_POST['commentaires']);	
	$datesortie = ($_POST['date_sortie']);
	$prix = ($_POST['prix']);
    $totaltaxe = round(($prix * 19.6)/100,2);
    $prixHT = round($prix - $totaltaxe,2);


	$animal1 = new animal($nomanimal,$nameproprio, $mail, $datedentree, $soins, $commentairestexte, $datesortie, $prix);



}
else {
    echo "erreur";
}
?>











<body>
    <center>

    <h2> Carte d'identité</h2>
    
    <span><b>Nom: </b></span> <span><?php echo $nomanimal;?></span>
    <br><br>
    <span><b>Nom du proprietaire: </b></span> <span><?php echo $nameproprio;?></span>
    <br><br>
    <span><b>Email: </b></span> <span><?php echo $mail;?></span>
    <br><br>
    <span><b>Date d'entree: </b></span> <span><?php echo $datedentree;?></span>
    <br><br>
    <span><b>Type de soins: </b></span> <span><?php echo $soins;?></span>
    <br><br>
        <span><b>Commentaires: </b></span> <span><?php echo $commentairestexte;?></span>
    <br><br>
        <span><b>Date de sortie: </b></span> <span><?php echo $datesortie;?></span>
    <br><br>
        <span><b>Prix: </b></span> <span><?php echo $prix;?></span><span> €</span>
    <br><br>
    <p><b> Taxes: </b> <?php echo $totaltaxe; ?> </p>
    <p> <b> Prix HT :</b> <?php echo $prixHT; ?> </p>
    </center>
    </body>