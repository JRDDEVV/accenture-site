<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Loops</title>
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

      <h1>Loop Result</h1>
      <p>Below you can see how many times the loop has ran.</p>
      <hr>
      <!-- Calls the 'forLoop();' function and passes through the value 'forLimit' entered by the user on 'loops.php'. This is used to set a limit to the number of times the forloop is ran within the 'forLoop();' function. -->
      <?php
        require_once('functions.php');
        forLoop();
      ?>

      <br>
      <figcaption class="blockquote-footer">Click <cite title="Source Title"><a href="loops.php">Here</a></cite> to return to previous page</figcaption>
      
    </main>
    <footer>Made by JR 2024 </footer>
  </body>
</html>
