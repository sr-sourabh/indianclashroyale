<?php
// Use below function when not on local server
// function getConnection(){
// 	$link = mysql_connect(
//         getenv('MYSQL_DB_HOST'), 
//         getenv('MYSQL_DB_USERNAME'), 
//         getenv('MYSQL_DB_PASSWORD'));
// 	$db_selected = mysql_select_db('indian', $link);
// 	return $link;
// }

// Use below function when running on local server
function getConnection(){
	$link = mysql_connect('localhost', 'root', '');
	$db_selected = mysql_select_db('indian', $link);
	return $link;
}
function getClan($id){
	$link=getConnection();
	$sql = "SELECT id, name FROM clan ";
	if($id!=false){
		$sql = $sql."where id = $id ;";
	}
	$result=mysql_query($sql, $link);
	return $result;
}
function getClanName($id){
	$link=getConnection();
	$sql="SELECT name FROM clan where id = "+$id+";";
	$result=mysql_query($sql, $link);
	return $result;
}
function setClan($name){
	$link=getConnection();
	$sql = "INSERT INTO clan (name) VALUES ('".$name."');";
	$result=mysql_query($sql, $link);
	return $result;
}
function deleteClan($id){
	$link=getConnection();
	$sql = "DELETE FROM clan WHERE id=$id ;";
	$result=mysql_query($sql, $link);
	return $result;
}
function getAllMember($id){
	$link=getConnection();
	$sql = "SELECT id, name, player_id FROM member where clan_id = $id ;";
	$result=mysql_query($sql, $link);
	return $result;
}
function getMember($id){
	$link=getConnection();
	$sql = "SELECT name, player_id, clan_id FROM member where id = $id ;";
	$result=mysql_query($sql, $link);
	return $result;
}
function setMember($name, $player_id, $clan_id){
	$link=getConnection();
	$sql = "INSERT INTO member (name, player_id, clan_id) VALUES ('".$name."', '".$player_id."', '".$clan_id."');";
	$result=mysql_query($sql, $link);
	return $result;
}
function updateMember($id, $name, $player_id, $clan_id){
	$link=getConnection();
	$sql = "UPDATE member SET name = '".$name."', player_id = '".$player_id."', clan_id = '".$clan_id."' where  id = '".$id."';";
	$result=mysql_query($sql, $link);
	return $result;
}
function deleteMember($id){
	$link=getConnection();
	$sql = "DELETE FROM member WHERE id=$id ;";
	$result=mysql_query($sql, $link);
	return $result;
}
?>