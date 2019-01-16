<?php
include_once("model.php");
if($_POST){
	$obj=new evenChecker;
	$obj->asign($_POST['fname'],$_POST['lname']);
	$obj->write();
}
?>