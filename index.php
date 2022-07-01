<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <link rel="stylesheet" href="Styles/Modules/auth.css" />
  </head>

  <body id="page_body">

    <form method="post" action="Modele/auth_door.php" id="formulaire" onsubmit="return envoyer()">
      <input id="user_name" type="text" name="user_name" placeholder="Email" class="login_field" autofocus onchange="verifier_champ_name();" />
      <input id="user_pwd" type="password" name="user_pwd" placeholder="Password" class="login_field" onchange="verifier_champ_pwd();" />
      <input id="login_sub" type="submit" name="login_sub" value="Log in"/>
    </form>

    <span id="school_name">IMSP</span>

    <script src="Controlleur/pagedeconnection/auth.js"></script>
  </body>
</html>
