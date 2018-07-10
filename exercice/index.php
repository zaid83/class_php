<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire php</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </head>




  <body>
    <center>
<div>
    <h2>Formulaire pour soins d'animaux</h2>

    
    <form method="POST" action="rendu.php">
        <table>
    <tbody>
        <tr>
   <td> <label>Nom de l'animal</label> </td>
    <td><input type="text" name="nomanimal" ></td>
            </tr>
        <br>
                <tr>
        <td><label>Le nom du proprio</label></td>
   <td><input type="text" name="nomproprio" ></td> 
        </tr>
        <br>
        <tr>
        <td><label>L'email du proprio</label></td>
   <td><input type="email" name="email" ></td> 
        </tr>
    
        <br>
        <tr>
    <td><label>Date d'entrée</label></td>
    <td><input type="date" name="date_entree" ></td>
        </tr>
        <br>
        <tr>
            <td>
							<select name="naturesoins">
								<option>Anesthesie</option>
								<option>Dentition</option>
								<option>Coloscopie</option>
								<option>Opération</option>
							</select>
						</td>
        </tr>
        <br>
         <tr>
    <td><label>Commentaires</label></td>
    <td><input type="textarea" name="commentaires" ></td>
        </tr>
        <br>
         <tr>
    <td><label>Date_sortie</label></td>
    <td><input type="date" name="date_sortie" ></td>
        </tr>
        <br>
        <tr>
    <td><label>Tarif des soins</label></td>
    <td><input type="number" name="prix"  ></td>
        </tr>
        <br>
     <tr>
        <td></td>
    <td><input type="submit" value="envoyer" class="btn btn-primary" name="form_animal"></td>
    <div class="clearfix"></div>
         </tr>
        </tbody>
            </table>
    </form>
</div>
  
    
    </center>
    
    
    
    
    
    </body>  
    
    
    
</html>