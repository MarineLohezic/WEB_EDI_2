<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./style.css" />
        <title>WEB_EDI_2</title>
    </head>
    <body>
    	<header><div class="center"><h1>WEB_EDI_2</h1></div></header>

    	<form method="POST" enctype="multipart/form-data" action="do.traitement.php">
    		<div class="colonne">
                <div>
                    <h4>Image fond : <?php if(isset($_GET["nomFond"])){ echo $_GET["nomFond"];}?> </h4>
                    <div class="row">
                        <img src=<?php if(isset($_GET["nomFond"])){ echo $_GET["nomFond"];}?> height="100" width="auto">
                        <div>
                            <div> Taille=<?php if(isset($_GET["nomFond"])){ echo filesize($_GET["nomFond"]);}?> </div>
                            <div> Date_création= <?php if(isset($_GET["nomFond"])){ echo filemtime ($_GET["nomFond"]);}?> </div>
                        </div>
                    </div>
                </div>
	    		<div>
                    <h4> Image Template : <?php if(isset($_GET["nomTemplate"])){ echo $_GET["nomTemplate"];}?> </h4>
                    <div class="row">
                        <img src=<?php if(isset($_GET["nomTemplate"])){ echo $_GET["nomTemplate"];}?> height="100" width="auto">
                        <div>
                            <div>Taille= </div>
                            <div>Date_création= </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h4> Image Resultat : <?php if(isset($_GET["nomResultat"])){ echo $_GET["nomResultat"];}?></h4>
                    <div class="row">
                        <img src=<?php if(isset($_GET["nomResultat"])){ echo $_GET["nomResultat"];}?> height="100" width="auto" >
                        <div>
                           <div>Taille= </div>
                            <div>Date_création= </div>
                        </div>
                    </div>
                </div>
		   	</div>
    	</form>
    </body>
</html>