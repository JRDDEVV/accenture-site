<?php

//Connects to the local MySQL Database. Other functions call this function when querying the database.
//Typically called by; updateDatabase() and displayUserInfo().
function getConnection() {
  try {
    $connection = new PDO("mysql:host=localhost;dbname=phpsite","root");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connection;
  } catch (Exception $e) {
    throw new Exception("Error establishing connection.". $e->getMessage(), 0, $e);
  }
}

//Recieves values 'ifValue1' & 'ifValue2' from the conditional.php file, compares them and echos an appropriate response back to the original document.
//Typically called by the 'conditional-script.php' file.
function compareValues() {
  if (empty($_POST["ifValue1"] || $_POST["ifValue2"])) {
    echo"<p>Please enter values in both boxes!</p>";
  }
  elseif ($_POST["ifValue1"] <= $_POST["ifValue2"]) {
    echo "<p>Sorry that's not right! Make sure the first value is higher!</p>";
  }
  else {
    echo "<p> Well Done! </p>";
  }
}

//Recieves a 'forLimit' value from the 'loops.php' file. This is used to limit the number of loops executed.
//Typically called by the 'loops-script.php' file.
function forLoop() {
  if (empty($_POST["forLimit"])) {
    echo "<p>Please enter values!</p>";
  }
  else {
    for ($counter = 1; $counter <= $_POST["forLimit"]; $counter++) {
      echo "<p>The loop has run $counter times.</p>";
    }
  }
}

//Recieves text from the 'arrays.php' file and stores it in an array. This array is then parsed based on the ',' parameter. The array is then echo'ed back into HTML, displayed on the 'arrayScript.php' file.
//Typically called by the 'arrays-script.php' file.
function textSeperator() {
  $userInput = $_POST['arrayEntries'];
  $seperatedArray = explode(",", $userInput);

  if (empty($_POST['arrayEntries'])) {
    echo "Please enter a value.";
  }
  else {
    $x = 1;
    foreach ($seperatedArray as $output) {
      echo "<p>Array Item $x: $output </p>";
      $x++;
    }
  }
}

//Takes 3 values from the 'funcs.php' file, concatenates the values and echos them back to the 'functionsScript.php' file.
//Typically called by the 'fun-script.php' file.
function generateHTML(){
  if (empty($_POST['funcText'])) {
    echo "<p>Please enter text on the previous text input box!</p>";
  }
  else {
    echo "<p>" , $_POST['openAttri'] , " " , $_POST['funcText'] , " ", $_POST['closeAttri'] , "</p>";
  }
}

//Connects to the database using 'the getConnection()' function. Used to get the 'email' and 'name' data from within the database.
//Typically called by the 'sql-script-display.php' file.
function displayUserInfo(){
  $dbConn = getConnection();
  $sqlQuery = 'SELECT email, name FROM userinfotable';

  $information = $dbConn->query($sqlQuery);

  while ($currentInfo = $information->fetchObject()) {
    echo "<div> <p>Record</p> <span class='username'><p> User Name: {$currentInfo->name}</span> <span class='userEmail'><p> User Email: {$currentInfo->email}</span> <hr> </div>";
  }
}

//Connects to the database using 'the getConnection()' function. Used to insert values into the 'mytable' table.
//Typically called by the 'sql-script-insert.php' file.
function insertIntoDatabase(){
  $username = $_POST['userName'];
  $email = $_POST['userEmail'];

  if (empty($username)) {
    echo "<p>You need to enter a username.</p>\n";
  }
  if (empty($email)) {
    echo "<p>You need to enter an email.</p>\n";
  }
  else{
    $dbConn = getConnection();
    $sqlQuery = "INSERT INTO userinfotable VALUES ('', '$username', '$email')";

    $dbConn->query($sqlQuery);

    echo "<p>Following records successfully added:</p>";
    echo "<p>Name: <b>", $username ,"</b></p>";
    echo "<p>Email: <b>", $email ,"</b></p>";
  }
}
