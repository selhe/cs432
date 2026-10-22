<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>My first server-side page</title>
  </head>
  <body>
    <header></header>
    <main>
    <form action="index.php">
      <input type="text" name="d[]"><br>
      <input type="text" name="d[]"><br>
      <input type="text" name="d[]"><br>
      <input type="text" name="d[]"><br>
      <input type="text" name="d[]"><br>
      <input type="submit">
    </form>
    </main>
<!--     <a href="index.php?d1=89">some link</a> -->
    <footer>
<?php
  $var = $_GET['d'];
  for ($i=0; $i<count($var); $i++)
    echo $var[$i];
  
  echo $var[0];
?>
    </footer>
  </body>
</html>
