<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./style.css" />
        <title>WEB_EDI_2</title>
    </head>
    <body>
    	<header><div class="center"><h1>WEB_EDI_2</h1></div></header>

    	<form enctype="multipart/form-data" action="do.traitement.php" method-post>
    		<div class="colonne">
	    		<input type="hidden" name="MAX_FILE_SIZE" value="1000">
	    		<p>Image fond : <input name="fond" type="file"> </p>
	    		<p>Image Template : <input name="template" type="file"></p>
	    		<p>Nom Image resultat : <input name="nomResultat" type="text"></p>
	    		<div class="sub">
		   			<input type="submit" value="Send file">
		   		</div>
		   	</div>
    	</form>
    </body>
</html>