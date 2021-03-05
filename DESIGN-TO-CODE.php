<?php
	$servername="localhost";
	$serverusername="root";
	$serverpassord="";
	$dbname="project";
	$conn=new mysqli($servername, $serverusername, $serverpassord,$dbname);
	if(!$conn){
		die("connection failed!".mysqli_connect_error());
}
	$sql= "SELECT * FROM user";
	$result= mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	echo "User_id:".$row['User_id']."|Username:".$row['Username']."|Password:".$row['Passord']."|Email:".$row['Email'].";";
}
}
$projects= "SELECT * FROM projects";
	$proj= mysqli_query($conn, $projects);
	if(mysqli_num_rows($proj) > 0){
	while($row = mysqli_fetch_assoc($proj)){
	echo "Project_id:".$row['Project_id']."|Project:".$row['Project']."|Deploy time:".$row['Deploy time'].";";
}
}
$activity= "SELECT * FROM activity";
	$task= mysqli_query($conn, $activity);
	if(mysqli_num_rows($task) > 0){
	while($row = mysqli_fetch_assoc($task)){
	echo "Activity_id:".$row['Activity_id']."|Activity:".$row['Activity']."|Time:".$row['Time'].";";
}
}
?>