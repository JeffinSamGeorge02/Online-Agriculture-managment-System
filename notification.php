<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
 
  $date=$_GET['date'];
  $top=$_GET['topic'];
  $notf=$_GET['noti'];
  $q="insert into notif(date,topic,noti)values('$date','$top','$notf')";
  $db->insertQuery($q);
  header('location:addnotification.php');
  ?>
</body>
</html>