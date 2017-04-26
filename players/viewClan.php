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


      
    if(isset($_POST) and isset($_POST['DelMember'])){
      $id=$_POST['DelMember'];
      deleteMember($id);
    }
    $categ="";
    if(isset($_POST)){
      if(isset($_POST['save'])){
        if(isset($_POST['id']) and $_POST['id']!=""){
          $result=updateMember($_POST['id'], $_POST['name'], $_POST['player_id'], $_POST['clan_id']);
        }else{
          $result=setMember($_POST['name'], $_POST['player_id'], $_POST['clan_id']);
        }
      }
      $result=getClan($_POST['clan_id']);
      if($result){
        while($row = mysql_fetch_assoc($result)) { 
          $categ=$row['name'];
        }
      }
    }
    $clan_id=$_POST['clan_id'];
    
  ?>
  <body>
    
    <div w3-include-html="/nav.html"></div>
      <script>
        w3IncludeHTML();
      </script>
  
    <div class="container">
      <a href="index.php"><h1>Indian Clash Royale</h1></a>
      <form id="DelForm" method="post" action="index.php">
        <h2>Members in <?php echo $categ; ?> 
         
        </h2>
      </form>
      <form id="members_list" method="post" action="viewMembers.php">
        <?php
        $result=getAllMember($_POST['clan_id']);
        if($result){
          while($row = mysql_fetch_assoc($result)) { ?>
            <button type="submit" name="member" id="member" value="<?php echo $row["id"];?>" class="btn btn-warning btn-block">
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
