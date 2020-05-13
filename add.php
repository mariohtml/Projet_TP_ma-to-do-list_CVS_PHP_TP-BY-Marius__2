<?php
	
	
			echo "La Datte d'Aujourdhui est: ";
			echo date("c ,- l ,- M  j ,- Y");
   /* var_dump($_POST);
    /*
        Ce que fait PHP
        $_POST =
        [
            'title' => 'Ma première tâche',
            'description' => 'jnoivgoineriob g',
            'date' => '2020-04-20',
            'prioity' => 'critical'
        ];
    */

    //    Si le formulaire a été soumis
    if(!empty($_POST))
    {
        //    Ouverture du fichier en écriture seule
        $file = fopen('tasks.csv', 'a+');    // Vaut false si problème

          //    Enregistrement de la ligne à la suite du fichier
        fputcsv($file, $_POST);

        //    Fermeture du fichier
        fclose($file);

//    Dans le fichier : Ma première tâche,jnoivgoineriob g,2020-04-20,critical
    }
?>


<?php/*
	
	
			echo "La Datte d'Aujourdhui est: ";
			echo date("c ,- l ,- M  j ,- Y");
			
			?>
			<?php
$ret = "";
if(isset($_POST["titre"]))
{
    $montab = [$_POST["titre"],$_POST["desc"],$_POST["date"],$_POST["prio"]];
    $handle = fopen("monfich.csv", "a+");
    if(fputcsv($handle , $montab))
    {
        $ret = "J'ai bien écrit la tache a été ajoutée";
    }
    else
    {
        $ret = "It's ko";
    }
    fclose($handle);
}
?>

 <?php
        if($ret!="")
        {
            echo '<h2>'.$ret.'</h2>';
        }
    