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
		<div class="container-fluid">
			<a href="index.php"><h1>Indian Clash Royale</h1></a>
			<form id="DelForm" method="post" action="index.php">
				<h2>Members in <?php echo $categ; ?> 
					<button type="submit" name="DelClan" id="DelClan" value="<?php echo $clan_id;?>" class="btn btn-danger" >Delete Clan</button>
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
				<input type="hidden" name="clan_id" id="clan_id" value="<?php echo $_POST['clan_id']; ?>"/>
				<button type="submit" name="add_member" id="add_member" value="new" class="btn btn-primary btn-block">Add New Member</button>
			</form>
		</div>
	</body>
</html>