<?php
  include 'db.php';
  if(isset($_POST['password']))
  {
    if($_POST['password'] == 'tryhard!@#')
      $_SESSION['id']=1;
      header('location:index.php');
  }


?>

<!DOCTYPE html>



<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="http://www.w3schools.com/lib/w3data.js"></script>
    <link href="/css/styles.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div w3-include-html="/nav.html"></div>
      <script>
        w3IncludeHTML();
      </script>
	<br><br>
        <form action = "login.php" method="POST">
        <input type ="text" placeholder="Whats ur mama's name?.." name = "password" required = "" >
        <button type="submit">GO!</button>
        </form>
        <br><br>
        
        <form action = "logout.php" method="POST">
        
        <button type="submit">LOG OUT!</button>
        </form>



      <div w3-include-html="/footer.html"></div>
      <script>
        w3IncludeHTML();
      </script>
    </div>
  </body>
</html>
