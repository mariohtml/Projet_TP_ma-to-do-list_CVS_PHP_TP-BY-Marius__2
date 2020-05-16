<!DOCTYPE HTML "CVS___PHP">
<html>
 <head>
		  <title> To Do List_CVS_PHP </title>
			  <meta charset="UTF-8"> <!--encodage UTF-8-->
			  <meta name="viewport" content="width=device-width, initial-scale=1"> <!--responsive-->
			  <meta name="Generator" content="Mario">
			  <meta name="Author" content="Mario">
			  <meta name="Keywords" content="">
			  <meta name="Description" content="Tableau_To-Do_CVS_PHP">
			 <!-- <link href="style.css" content="text/css" rel="stylesheet"/>-->
			  <link href="style3.css" content="text/css" rel="stylesheet">
 </head>
			 <body>
			 
				<div class="body1">
						<div class="boutons" style="text-align:center; background: black; padding: 10px;">
						<form action="script.php" method="get">
							<input type="button" onClick="window.location.href='index0.html.php'" name="List" value="List" style="width:100px; height:40px; border: 3px solid #00bfff; border-radius: 8px; margin-right: 80px;">
							<input type="button" onClick="window.location.href='tableau_cvs_ add.html'"  name="ADD" value="ADD" style="width:100px; height:40px; border: 3px solid #00bfff; border-radius: 8px; margin-right: 80px;">
							<input type="reset" name="Remove" onMouseOver="maFunction3()" value="Remove" style="width:100px; height:40px; border: 3px solid #00bfff; border-radius: 8px;">
						</form>					
						</div>
						
						<p id="click1" style="text-align:center; color:#300040; font-size:20px;"></p>
						</br>				
						<div class="textarea" style="text-align: center; background: black; padding: 10px;  color:#FF0000; font-size: 40px;">Tu peux supprimer les taches"
						</div>
				</div>		
				<br></br><br></br>
				<h1>Voici le contenu de mon fichier CSV </h1>
				   <br></br>
					<br></br>
					<div class="contener">
<h2>Supprimer une tache</h2>
    <form action="./Remove.html.php" method="post">
    <div>
            <label for="tache">Tache : </label>
            <select name="tache" id="tache">
                <?php
                    $handle = fopen("tasks.csv", "r");
                    $numL = 0;
                    while($line = fgetcsv($handle))
                    {
                        
                        echo '<option value="'.$numL.'">'.$line[0].'</option>';
                        $numL++;
                    }      
                    fclose($handle);    
                ?>
            </select>
        </div>
    <div>
            <div></div>
            <input type="submit" value="Supprimer">
            <div></div>
        </div>
</form>

</div>
<?php
$ret = "";
if(isset($_POST["tache"]))
{
    //On ouvre en lecture
    $handle = fopen("tasks.csv", "r");
    $numL = 0;
    $Lines = [];
    while($line = fgetcsv($handle))
    {
        if($numL!=$_POST["tache"])
        {
            //On stocke la ligne dans un tableau sauf celle qu'on veut supprimer
            array_push ($Lines,$line);
        }
        $numL++;
    }
    fclose($handle);

    //On ouvre le fichier en écriture de remplacement
    $handle = fopen("tasks.csv", "w+");
    foreach($Lines as $line)
    {
        //on stocke ligne à ligne dans le fichier
        if(!fputcsv($handle ,$line))
        {
            $ret = "Erreur je ne peux pas supprimer...";
        }
    }
    if($ret=="")
    {
        //on a eut aucune erreur
        $ret = "J'ai bien supprimée";
    }
    fclose($handle);
    
}
//include 'suppTodo.phtml';
?>


<?php
				/* ou une autre methode pour contabiliser les vues !!!*/
				$fichier = fopen('tasks2.txt' , 'r+');
				$vues = fgets($fichier);
				$vues++;
				
				fseek($fichier, 0);
				fputs($fichier, $vues);
				
				
				fclose($fichier);
				
				echo '<div class="score">'."Voici le compteur de vues: "." ".$vues.'</div>';
				//echo $vues;
				
				?>
							<br></br><br></br>
							<br></br><br></br>
				<div class="body1">
						<h1 style="cursor:pointer;" onclick="alert('clic sur l\'élément TEST');">Test</h1>
						
						<form action="script.php" method="POST">Rentrez ici votre nom : 
							<input type="text" name="nom" placeholder="Nom">
							<input type="text" name="prenom" placeholder="Pernom">
							<input type="text" name="adresse"placeholder="Adresse">
							<input type="submit" value="Envoi">
						</form>
				</div>	

				</script>
				<script type="text/javascript" src="tableau.js">
			  </script>
</body>
</html>