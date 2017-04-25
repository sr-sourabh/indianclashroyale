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
<?php
include 'db.php';
if(!loggedin())					//no direct access for any nigga
  header('location: /clanhall.html');
      
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
    <div class="container-fluid">
      <a href="index.php"><h1>Indian Clash Royale</h1></a>
      <?php
if($id!=""){?>
        <form id="DelMemberForm" method="post" action="viewClan.php">
          <button type="submit" name="DelMember" id="DelMember" value="<?php echo $id;?>" class="btn btn-danger">Delete Member</button>
          <input type="hidden" name="clan_id" id="clan_id" value="<?php echo $clan_id; ?>" />
        </form>
        <?php } ?>
          <form id="add_member" method="post" action="viewClan.php">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
              <label for="name">Member Tag</label>
              <input type="text" class="form-control" name="player_id" id="player_id" value="<?php echo $player_id; ?>">
            </div>
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="clan_id" id="clan_id" value="<?php echo $clan_id; ?>" />
            <button type="submit" name="save" id="save" class="btn btn-primary btn-block">Save</button>
          </form>
    </div>
  </body>

</html>
