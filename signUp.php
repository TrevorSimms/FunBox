<?php include './phpData/config.php'; ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style/main.css">
    <script src="./scripts/main.js"></script>
  </head>

  <body>

    <div class="wail">

      <form name="NewAccount" action="./receiver.php"
        onsubmit="return confirmNAPassword()" method="post">
        <table>
          <thead>
            <h2>Personal Information</h2>
          </thead>
          <tr>
            <td>First Name:</td>
            <td>
              <input type="text" name="nafirstName" required>
              <span class="req">*</span>
            </td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td>
              <input type="text" name="nalastName" required>
              <span class="req">*</span>
            </td>
          </tr>
          <tr>
            <td>Age(years):</td>
            <td>
              <input type="number" name="naage" min="0">
            </td>
          </tr>
          <tr>
            <td>Sex:</td>
            <td>
              <input type="radio" name="nasex" value="Male"> Male
              <input type="radio" name="nasex" value="Female"> Female
              <input type="radio" name="nasex" value="Apache Helicopter">
              Apache helicopter&#185;
            </td>
          </tr>
        </table>
        <table>
          <thead>
            <h2>Account Details</h2>
          </thead>
          <tr>
            <td>Username:</td>
            <td>
              <input type="text" name="nausername" required>
              <span class="req">*</span>
            </td>
          </tr>
          <tr>
            <td>E-mail:</td>
            <td>
              <input type="email" name="naemail"
              placeholder="example@eg.org" required>
              <span class="req">*</span>
            </td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" name="napswd"></td>
          </tr>
          <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="napswdcheck"></td>
          </tr>
        </table>
        <p>
          Would you like to be subscribed to our premium bullcrap?
          <input type="checkbox" name="nabullcrap">
        </p>
        <input type="submit" name="nasubmit" value="Submit">
        <span class="req">*required</span>
      </form>

      <p>
        &#185; <span class="italic">&quot;Hell naw don't discriminize&quot;</span>
        - <span class="bold">Quavo</span>,
         co-founder of <span class="italic">&quot;The Dab&quot;</span>
      </p>
        <a href="./"><button>Home Page</button></a>

    </div>
    <footer class="the-foot">
      <?php echo "FunBox on ".$_SERVER["HTTP_HOST"]; ?>
    </footer>

  </body>

</html>
