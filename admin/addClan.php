<?php

include 'db.php';

if(!loggedin())					//no direct access for any nigga
  header('location: /clanhall.html');




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <title>Indian Clash Royale</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <a href="index.php"><h1>Indian Clash Royale</h1></a>
      <h2>Add Clan</h2>
      <form id="add_clan" method="post" action="index.php">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <button type="submit" name="save" id="save" class="btn btn-primary btn-block">Save</button>
      </form>
    </div>
  </body>
</html>
