<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SQL</title>
    <link rel="stylesheet" href="styles\main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body style="background-color: rgb(250, 250, 250);">
    <!-- Contains typical header elements, but uses nav for Bootstrap compatibility. -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: white;" aria-label="header content">
      <div class="container-fluid">
        <p class="navbar-brand" href="#" style="font-family: 'Verdana', sans-serif; font-size: 3em; color:#8892bf;">Programming in PHP</p>
      </div>
    </nav>
    <!-- Contains typical nav bar elements, Bootstrap classes and styling can be found throughout. -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="navigation">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="conditional.php">Conditional Logic</a></li>
            <li class="nav-item"><a class="nav-link" href="loops.php">Loops</a></li>
            <li class="nav-item"><a class="nav-link" href="arrays.php">Arrays</a></li>
            <li class="nav-item"><a class="nav-link" href="fun.php">Functions</a></li>
            <li class="nav-item"><a class="nav-link" href="sql-page.php">SQL</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <!-- Contains the main content of the page, uses Bootstrap styling to create a more visually appealing central component to the page where content is stored. -->
    <main class="container shadow-sm " style="margin-top:2%; background-color: white; border-radius:10px; padding:2%;">
    
      <h1><p>Structured Query Language</p></h1>
      <p>PHP can be used in conjunction with another programming language called 'SQL'. SQL is mostly used to send, recieve or update information in a SQL-based database. </p>
      <p>PHP can communicate with database systems using SQL queries to select database information and then display it to the HTML page. PHP can also be used to add information into a database, examples of both of these implementations can be seen below.</p>
      <hr>
      <!-- Calls the 'sql-script-display.php' file, which is then used to display the database values. This does not pass any values. This leads to the 'displayUserInfo();' function being called. -->
      <h2>Displaying Data</h2>
      <form action="sql-script-display.php" method="POST">
        <p>The first component is to display the database information, this can be done with an SQL 'select' statement and then using a PHP echo to display the result.
        <p>$variableName = 'SELECT data1, data2 FROM tableName';
        <input type="submit" value="Query Database" class="btn btn-primary">
      </form>
      <hr>
      <!-- Calls the 'sql-script-insert.php' file, and passes through the 'userName' and 'userEmail' values. These values are then inserted into the database using the 'inserIntoDatabase();' function. -->
      <h2>Updating Data</h2>
      <p>The second component is used to insert information into the database. The database currently stores users' names and emails. Typing values into the correct input boxes and submitting them will cause them to be saved to the database.</p>
      <form action="sql-script-insert.php" method="POST">
        <p>Enter user name: <input type="text" name="userName" value=""></p>
        <p>Enter user email: <input type="text" name="userEmail" value=""></p>
        <input type="submit" value="Insert values into Database" class="btn btn-primary">
        <hr>
        <p>Below you can see how this is being done from a code standpoint:</p>
        <p>$variableName = "INSERT INTO tableName VALUES ('', '$username', '$email')";</p>
      </form>

    </main>
    <footer>Made by JR 2024 </footer>
  </body>
</html>
