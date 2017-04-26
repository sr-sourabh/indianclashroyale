<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Indian Clash Royale</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://www.w3schools.com/lib/w3data.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<?php
include 'db.php';

      
$player_id="";
$name="";
$id="";
$clan_id="";
if(isset($_POST)){
    $clan_id=$_POST['clan_id'];
}
if(isset($_POST) and isset($_POST['member'])){
    $result=getMember($_POST['member']);
    if($result){
        while($row = mysql_fetch_assoc($result)) {
            $player_id=$row['player_id'];
            $name=$row['name'];
            $id=$_POST['member'];
        }
    }
}
?>

  <body>
  
    <div w3-include-html="/nav.html"></div>
      <script>
        w3IncludeHTML();
      </script>
  
    <div class="container">
      <a href="index.php"><h1>Indian Clash Royale</h1></a>
        <div class = "memberinfo">
          <div><?php echo $name ; ?> </div>
          <div><?php echo $player_id ; ?> </div>
        </div>
      
                   
    </div>
    
     <div w3-include-html="/footer.html"></div>
      <script>
        w3IncludeHTML();
      </script>
    
  </body>

</html>
