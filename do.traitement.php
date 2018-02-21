<?php

	//Verification des fichiers uploadés
	if(is_uploaded_file($_FILES['fond']['tmp_name'])&&is_uploaded_file($_FILES['fond']['tmp_name'])){
		//Sauvegarde des noms fichiers
		$nomFond= $_FILES["fond"]["name"];
		$nomTemplate= $_FILES["template"]["name"];

		$newFond= 'nom_image_brute.jpg';
		$newTemplate= 'nom_print_template.png';

		//Copie des fichiers 
		move_uploaded_file($_FILES['fond']['tmp_name'], "./".$_FILES["fond"]["name"]);
		move_uploaded_file($_FILES['template']['tmp_name'], "./".$_FILES["template"]["name"]);

		copy ( $_FILES["fond"]["name"] , $newFond);
		
		copy ( $_FILES["template"]["name"] , $newTemplate);
		
		//rename ($_FILES["template"]["name"], "nom_print_template.png" );

		exec("java imagesMerge");
		rename ("nom_image_resultat.jpg", $_POST["nomResultat"]);

		header ('Location: affichage.php?nomFond='.$nomFond.'&nomTemplate='.$nomTemplate.'&nomResultat='.$_POST["nomResultat"]);
	}else{
		header ('Location: index.php?error_upload=true');
	}
	/*print_r($_FILES['fond']['tmp_name']);
	print_r($_FILES['fond']['error']);
	echo($_FILES["template"]["name"]);
	echo($_FILES["template"]["size"]);
	echo($_FILES["template"]["type"]);
	echo($_FILES["template"]["error"]);*/
?>