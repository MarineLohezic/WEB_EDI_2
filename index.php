<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./style.css" />
        <title>WEB_EDI_2</title>
    </head>
    <body>
    	<header><div class="center"><h1>WEB_EDI_2</h1></div></header>
        <div class="error center">
            <?php
                if (isset($_GET['error_upload'])) // On a eu une erreur
                {
                    echo 'Une erreure c\'est produite lors de l\'upload, veuillez retenter';
                }
            ?>
        </div>

    	<form method="POST" enctype="multipart/form-data" action="do.traitement.php">
    		<div class="colonne">
                <!-- MAX_FIL_SIZE se mesure en octet -->
	    		<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
	    		<p>Image fond : <input type="file" name="fond" id="fond" /> </p>
	    		<p>Image Template : <input name="template" type="file"/></p>
	    		<p>Nom Image resultat : <input name="nomResultat" type="text"/></p>
	    		<div class="sub">
		   			<input type="submit" value="Send file">
		   		</div>
		   	</div>
    	</form>
    </body>
</html>