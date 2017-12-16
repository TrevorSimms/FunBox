<?php
// TODO -- Replace XML with MySQL

// handles misc. methods
class metaHandler {
  // determine the right ordinal suffix for age
  public function RightEnding($age) {
    $counter;
    if (($age % 10) == 0) {
      $counter = "st";
    }
    elseif (($age % 10) == 1) {
      $counter = "nd";
    }
    elseif (($age % 10) == 2) {
      $counter = "rd";
    }
    else {
      $counter = "th";
    }
    return $counter;
  }
  // loop through $_POST array and parse user input
  public function parsePost() {
    foreach ($_POST as $post) {
      if (!isset($post)) {
        $post = "";
      }
      $post = htmlspecialchars($post);
    }
  }
}

// handles account methods
class accountHlnd
{
  // add an account to the system
  function addAccount() {
    $accPath = "C:/xampp/htdocs/FunBox/docs/xml/".$_POST["nausername"].".xml";    #HERE

    if (!file_exists($accPath)) {
      $newXml = fopen($accPath, "w");
      fwrite($newXml, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
      fwrite($newXml, "<profile>\n");
      fwrite($newXml, "</profile>");
      fclose($newXml);
      $xml = new SimpleXMLElement($accPath, 0, true);

      $xml->addChild("personalDetails");
      $xml->personalDetails->addChild("firstName", $_POST["nafirstName"]);
      $xml->personalDetails->addChild("lastName", $_POST["nalastName"]);
      $xml->personalDetails->addChild("age", $_POST["naage"]);
      if (isset($_POST["nasex"])) {
        $xml->personalDetails->addChild("sex", $_POST["nasex"]);
      }

      $xml->addChild("accountInfo");
      $xml->accountInfo->addChild("username", $_POST["nausername"]);
      $xml->accountInfo->addChild("email", $_POST["naemail"]);
      $xml->accountInfo->addChild("pswd", $_POST["napswd"]);
      if (isset($_POST["nabullcrap"])) {
        $xml->accountInfo->addChild("bullcrap", $_POST["nabullcrap"]);
      }
      $xml->asXML($accPath);
      return false;
    }
    return true;
  }

  // get account from the system
  function getAccount() {
    if (isset($_POST["gausername"])) {
      $postAccPath = "C:/xampp/htdocs/FunBox/docs/xml/".$_POST["gausername"].".xml";    #HERE
      $sessAccPath = "";
    }
    elseif (isset($_SESSION["gaUsername"])) {
      $sessAccPath = "C:/xampp/htdocs/FunBox/docs/xml/".$_SESSION["gaUsername"].".xml";   #HERE
      $postAccPath = "";
    }
    else {
      $postAccPath = "";
      $sessAccPath = "";
    }
    if (!file_exists($postAccPath) && !file_exists($sessAccPath)) {
      return true;
    }
    else {
      if (!file_exists($postAccPath)) {
        $accPath = $sessAccPath;
      }
      else {
        $accPath = $postAccPath;
      }
      $xml = simplexml_load_file($accPath);

      $tempUsername = (string)$xml->accountInfo->username;
      $tempPassword = (string)$xml->accountInfo->pswd;
      if(isset($_POST["gapswd"])) {
        if ($tempPassword != $_POST["gapswd"]) {
          return true;  // TODO handle this better
        }
      }
      $_SESSION["gaUsername"] = $tempUsername;
      $_SESSION["gaEmail"]  = (string)$xml->accountInfo->email;
      $_SESSION["gaFirstName"] = (string)$xml->personalDetails->firstName;
      $_SESSION["gaLastName"] = (string)$xml->personalDetails->lastName;
      $_SESSION["gaAge"] = (string)$xml->personalDetails->age;
      $_SESSION["gaSex"] = (string)$xml->personalDetails->sex;
      if ($xml->xpath("accountInfo/bullcrap")) {
        $_SESSION["gaBullcrap"] = "Active";
      }
      else {
        $_SESSION["gaBullcrap"] = "Disabled";
      }
      return false;
    }
  }
}
?>
