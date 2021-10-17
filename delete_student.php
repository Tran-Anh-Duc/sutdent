<?php
include_once "models/student.php";
include_once "services/studentManager.php";

$studentManager= new StudentManager();
$id=$_GET["id"];
$studentManager->deleteStudentById($id);
header("Location:index_student.php");