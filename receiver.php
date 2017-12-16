<?php
session_start();
include './phpData/MyFunctional.php';
include './phpData/config.php';
$recMetaHndl = new metaHandler();
$recAccountHlnd = new accountHlnd();
$recMetaHndl->parsePost();
$usernameExists = $recAccountHlnd->addAccount();
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./style/main.css">
  </head>

  <body>

    <div class="wail">
      <?php if (!$usernameExists) { ?>
      <h2>Welcome, <?php echo $_POST["nausername"]; ?>, to our bullcrap!</h2>
      <p>
        Hope you have a good <?php
        echo ($_POST["naage"] + 1) . $recMetaHndl->RightEnding($_POST["naage"]);
        ?> birthday!
      </p>
      <p>Login to access your account.</p>
      <?php } else { ?>
      <h1>Hey, wait a sec...</h1>
      <p>This Username already exists!</p>
      <?php } ?>
      <a href="./"><button>Home Page</button></a>
    </div>

  </body>

</html>
