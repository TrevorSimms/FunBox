<?php
session_start();
include './phpData/config.php';
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
      <?php if (!isset($_SESSION["gaUsername"])) { ?>
      <h1>What you want?</h1>
      <p><a href="./signUp.php"><button>Sign-up</button></a></p>
      <p><a href="./login.php"><button>Login</button></a></p>
      <?php } else { ?>
      <h1>Welcome, <?php echo $_SESSION["gaUsername"]; ?></h1>
      <p><a href="./signUp.php"><button>Sign-up</button></a></p>
      <p><a href="./login.php"><button>Login</button></a></p>
      <p><a href="./getter.php"><button>Account-info</button></a></p>
      <?php } ?>

    </div>

    <footer class="the-foot">
      <?php echo "FunBox on ".$_SERVER["HTTP_HOST"]; ?>
    </footer>

  </body>
</html>
