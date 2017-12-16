<?php
session_start();
include './phpData/config.php';
include './phpData/MyFunctional.php';
$getMetaHndl = new metaHandler();
$getAccountHlnd = new accountHlnd();
$getMetaHndl->parsePost();
$wrongPassword = $getAccountHlnd->getAccount();
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
    <?php if ($wrongPassword) { ?>
      <h2>Hey bro! What's up with that?</h2>
      <p>This means either the account wasn't found
      <br>or that you used the wrong password!!</p>
    <?php } else { ?>
      <h2>Welcome, <?php echo $_SESSION["gaFirstName"]; ?>!</h2>
      <p>
        <table>
          <tr>
            <td>Username:</td>
            <td><?php echo $_SESSION["gaUsername"]; ?></td>
          </tr>
          <tr>
            <td>E-mail:</td>
            <td><?php echo $_SESSION["gaEmail"]; ?></td>
          </tr>
          <tr>
            <hr>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><?php echo $_SESSION["gaLastName"]; ?></td>
          </tr>
          <tr>
            <td>First Name: </td>
            <td><?php echo $_SESSION["gaFirstName"]; ?></td>
          </tr>
          <tr>
            <td>Age: </td>
            <td><?php echo $_SESSION["gaAge"]; ?></td>
          </tr>
          <tr>
            <td>Sex: </td>
            <td><?php echo $_SESSION["gaSex"]; ?></td>
          </tr>
          <tr>
            <td>Subscription: </td>
            <td><?php echo $_SESSION["gaBullcrap"] ?></td>
          </tr>
        </table>
      </p>
      <?php } ?>
      <a href="./"><button>Home Page</button></a>
    </div>

  </body>
</html>
