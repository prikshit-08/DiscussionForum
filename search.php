<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "forum_db"; 

if (!$db = new mysqli($host, $user,$password,$dbname)) {
	die($db->connect_errno.' - '.$db->connect_error);
}

error_reporting(0);


$arr = array();

if (!empty($_POST['keywords'])) {
	$keywords = $_POST['keywords'];
	$sql = "SELECT id, title FROM posts WHERE tags LIKE '%".$keywords."%' AND status = '1' ";
	$result = $db->query($sql) or die($mysqli->error);
	if ($result->num_rows > 0) {
		while ($obj = $result->fetch_object()) {
			$arr[] = array('id' => $obj->id, 'title' => $obj->title);
		}
	}
}
echo json_encode($arr);
