<?php
	include_once("../classes/class.proctorFunctions.php");
	$post = file_get_contents("php://input");
	$entryData = json_decode($post);
	$obj = new proctor();
	$data = $obj->fetchProctorBasic($entryData);
  echo json_encode ($data);

 ?>
