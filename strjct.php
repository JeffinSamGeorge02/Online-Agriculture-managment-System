<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];


$q2="update rform set status='rejected' where rfid='$id'";
$db->updateQuery($q2);
header('location:strqst.php');
	?>