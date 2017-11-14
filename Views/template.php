<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link rel="stylesheet" href="Front/CSS/style.css" />
    <link rel="icon" href="Front/img/favicon.png" />
    <script src="Front/JS/burger.js" charset="utf-8"></script>
    <title><?= $title ?></title>
  </head>
  <body>
    <div class="menu" id="menu">
      <ul>
        <li><a href="index.php?code=admin">Administration</a></li>
        <li><a href="javascript:void(0);" onclick="burgerIcon();" class="icon" >&#9776;</a></li>
      </ul>
    </div>
    <header>
      <a href="index.php"><h1>Bienvenue sur MiniCMS</h1></a>
      <h2>Anthony Lefève</h2>
    </header>
    <?= $content ?>
    <footer>
      <p>Copyright © Anthony Lefève. Tous droits réservés.</p>
    </footer>
  </body>
</html>
