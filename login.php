<?php include './phpData/config.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./style/main.css">
  </head>
  <body>

    <div class="wail">
      <form name="GetAccount" action="./getter.php" method="post">
        <table>
          <thead>
            <tr><h2>Log In</h2></tr>
          </thead>
          <tbody>
            <tr>
              <td>Username:</td>
              <td><input type="text" name="gausername"></td>
            </tr>
            <tr>
              <td>Password:</td>
              <td><input type="password" name="gapswd"></td>
            </tr>
          </tbody>
        </table>
        <input type="submit" name="gasubmit" value="Submit">
      </form>
      <br>
      <a href="./"><button>Home Page</button></a>
    </div>

  </body>
</html>
