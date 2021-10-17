<?php
include_once "models/student.php";
include_once "services/studentManager.php";

$studentManager= new StudentManager();
$id = $_GET["id"];
$student = $studentManager->getStudentById($id);
if (!isset($student)){
    die("không tồn tại");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>thong tin hoc vien</title>
</head>
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 30%;
        margin-left: 450px;
    }
    .card h2,h4,p{
        text-align: center;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
        padding: 2px 16px;
    }
    a{
        margin-left: 379px;
        border: 1px solid gray;
    }

</style>
<body style="background-color: #04AA6D">


<div class="card">
    <a href="index_student.php"><button>&times;</button></a>
    <h2>Thông tin học viên</h2>
    <img src="pikachu.jpg" alt="Avatar" style="width:100%">
    <div class="container">
        <h4><b>Tên sinh viên:<?php echo $student->getFirstname() ?></b></h4>
        <p>Mã sinh viên:<?php echo $student->getCode() ?></p>
        <p>Điểm trung bình ba môn(toán ,lí , hóa)</p>
        <p><?php echo $student->getMediumScore() ?></p>
    </div>
</div>


</body>
</html>
