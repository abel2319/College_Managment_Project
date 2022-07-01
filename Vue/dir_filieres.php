<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chef Dirlo Dashboard</title>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/dir_filieres.css"/>
</head>
<body>
    <?php
        include_once('panel.php')
    ?>
    <div class="center_block" id="center_block">
	<h1 class="aah">Informations sur les filières</h1>
    <?php
        include_once('../Controlleur/info_pour_dir.php');
    ?>
    </div>
</body>
</html>
