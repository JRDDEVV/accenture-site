<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Functions</title>
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

      <h1><p>Functions</p></h1>
      <p>Functions can be used to create re-usable pieces of code. Functions must be called to be executed, within PHP this is done by typing: "functionName();".</p>
      <p>An example of how a function could be used within PHP can be seen below, this function takes in 3 user inputs, and 'echos' them back to the HTML document. A PHP echo is used to display HTML content on the current page.</p>
      <hr>
      <!-- Takes user inputs and passes them to the 'fun-script.php' file using the POST method. This is eventually used in the 'compareValues()' function. -->
      <form action="fun-script.php" method="POST">
        <p>Select HTML attributes and enter text to be generated:</p>
        <p>function generateHTML(){</p>
        <p>echo "
        <select name="openAttri" id="openAttri">
          <option value="<b>"> &lt;b&gt;</option>
          <option value="<i>"> &lt;i&gt;</option>
          <option value="<u>"> &lt;u&gt;</option>
        </select>

        <input type="text" name="funcText" placeholder="Enter text here" value="">

        <select name="closeAttri" id="closeAttri">
          <option value="</b>"> &lt;/b&gt;</option>
          <option value="</i>"> &lt;/i&gt;</option>
          <option value="</u>"> &lt;/u&gt;</option>
        </select>
        "; }</p>

        <input type="submit" value="Run function" class="btn btn-primary">
      </form>

    </main>
    <footer>Made by JR 2024 </footer>
  </body>
</html>
