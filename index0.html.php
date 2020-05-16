<!DOCTYPE HTML PUBLIC "CVS___PHP">
<html>
 <head>
		  <title> To_Do_liste_taches_2_CVS_PHP 002 </title>
			  <meta charset="UTF-8"> <!--encodage UTF-8-->
			  <meta name="viewport" content="width=device-width, initial-scale=1"> <!--responsive-->
			  <meta name="Generator" content="Mario">
			  <meta name="Author" content="Mario">
			  <meta name="Keywords" content="">
			  <meta name="Description" content="La_liste_de_taches_CVS_PHP">
			  <link href="style1.css" content="text/css" rel="stylesheet"/>
 </head>
			 <body >
			 
				
				<div class="boutons" style="text-align:center; background: black; padding: 10px;">
				<!--<form action="scriptlist.php" method="get">-->
					<input  type="button" onClick="" onMouseOver="maFunction2()" name="List" value="List" style="width:100px; height:40px; border: 3px solid #00bfff; border-radius: 8px; margin-right: 80px;">
					<input type="button" onClick="window.location.href='tableau_cvs_ add.html'" name="ADD" value="ADD" style="width:100px; height:40px; border: 3px solid #00bfff; border-radius: 8px; margin-right: 80px;">
					<input type="reset" onClick="window.location.href='Remove.html.php'"  name="Remove" value="Remove"style="width:100px; height:40px; border: 3px solid #00bfff; border-radius: 8px;">
				</form>
				</div>
				
				<p id="click1" style="text-align:center; color:#300040; font-size:20px;"></p>
				</br>				
				<div class="textarea" style="text-align: center; background: black; padding: 10px;  color:#FF0000; font-size: 40px;">List All Tasks
				</div>
				<br></br>
				<br></br>
				<div class="contener">
        <h1>Liste des taches</h1>
        <table>
        <thead>
            <th>Titre</th>
            <th>Description</th>
            <th>Date</th>
            <th>Priorité</th>
            </thead>
        <?php
          $handle = fopen("tasks.csv", "r");
          $paire =true;
          while($line = fgetcsv($handle))
          {
              if($paire)
              {
                echo '<tr class="paire">';
              }
              else
              {
                echo '<tr class="impaire">';
              }
              
              echo '<td class="titre">'.$line[0].'</td>';
              echo '<td class="desc">'.$line[1].'</td>';
              echo '<td class="date">'.substr($line[2],8,2).'/'.substr($line[2],5,2).'/'.substr($line[2],0,4).'</td>';
              if($line[3]=="1")
              {
                echo '<td class="prio">&uarr;&uarr;</td>';
              }
              elseif($line[3]=="2")
              {
                echo '<td class="prio">&uarr;</td>';
              }
              elseif($line[3]=="3")
              {
                echo '<td class="prio">&harr;</td>';
              }
              elseif($line[3]=="4")
              {
                echo '<td class="prio">&darr;</td>';
               
              }
              elseif($line[3]=="5")
              {
                echo '<td class="prio">&darr;&darr;</td>';
              }
              
              echo '</tr>';
              $paire=!$paire;
          }
          fclose($handle);
        ?>
        </table>
</div>

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
			<!--	<div>
				<script type="text/php" src="scriptlist.php">
				</script>
				</div>
				<!--<br></br>
				<form action="script.php" method="POST" style="text-align: center;">TITRE <input type="text" value="" name="title" placeholder="Titre">
				<br></br>
				DESCRIPTION
					<input type="text" name="descipt" placeholder="Description">
					
					
				</form>
				</div>
				</div>
				
			    <h1 style="cursor:pointer;" onclick="alert('clic sur l\'élément LIST');">Test 002</h1>
				
				<script type="text/php" src="script.php">
				</script>-->
				<script type="text/javascript" src="tableau2.js">
			  </script>
			 </body>
</html>
<!--window.location.href='index0.html-->