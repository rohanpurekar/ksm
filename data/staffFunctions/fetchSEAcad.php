<?php
include_once("../classes/class.calcData.php");
$post = file_get_contents("php://input");
$entryData = json_decode($post);
$obj = new calcData();
$acad = $obj->fetchSEAcad($entryData);
$attendance = $obj->fetchAttendance($entryData,5,8);
$utperf = $obj->fetchUTperformance($entryData,5,8);
$endsem = array('passed' => 5,'percentage'=>80 );
$prac = array('passed' => 3,'percentage'=>88 );

$class = array();
$class['attendance'] = $attendance;
$class['ut'] = $utperf;
$class['acad'] = $acad;
$class['endsem'] = $endsem;
$class['prac'] = $prac;
echo json_encode($class);
?>
