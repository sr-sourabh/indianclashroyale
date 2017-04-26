<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Indian Clash Royale</title>
  <meta charset="utf-8">
  <script src="http://www.w3schools.com/lib/w3data.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<?php
include 'db.php';


  
if(isset($_POST) and isset($_POST['save']) and isset($_POST['name'])){
    $name=$_POST['name'];
    setClan($name);
    // header('location:index.php');
    echo '<script>window.location.href = index.php;</script>';
}
if(isset($_POST) and isset($_POST['DelClan'])){
    $id=$_POST['DelClan'];
    deleteClan($id);
    // header('location:index.php');
    echo '<script>window.location.href = index.php;</script>';
}
?>

  <body>
  
    <div w3-include-html="/nav.html"></div>
      <script>
        w3IncludeHTML();
      </script>
      
    <div class="container">
    
      
    
      <h1>Indian Clash Royale</h1>
      <h2>List of Our Clans</h2>
      <form id="clan_list" method="post" action="viewClan.php">
        <?php
$result=getClan(false);
if($result){
    while($row = mysql_fetch_assoc($result)) { ?>
          <button type="submit" name="clan_id" id="clan_id" value="<?php echo $row["id"];?>" class="btn btn-warning btn-block">
            <?php echo $row["name"];?>
          </button>
          <br>
          <?php }?>
            <?php }?>
      </form>
     
      
    </div>
    
    <div w3-include-html="/footer.html"></div>
      <script>
        w3IncludeHTML();
      </script>
      
  </body>
</html>
