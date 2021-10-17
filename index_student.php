<?php
include_once "models/student.php";
include_once "services/studentManager.php";

$studentManager= new StudentManager();
//$studen1 =new Studen(1,"ducA",7,8,9);
//$studen2 =new Studen(2,"ducB",7,8,9);
//$studen3 =new Studen(3,"ducC",7,8,9);
//$studenmanager->storeStudens($studen1);
//$studenmanager->storeStudens($studen2);
//$studenmanager->storeStudens($studen3);


$students=$studentManager->getAllStudent();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach hoc vien</title>
</head>
<body>
<a href="create_student.php"><button>Thêm học viên</button></a>
<table border="1px">
<thead>
<tr>
    <th>STT</th>
    <th>Code</th>
    <th>First name</th>
    <th>Math</th>
    <th>Physical</th>
    <th>Chemistry</th>
</tr>
</thead>
<tbody>
<?php foreach ($students as $key=> $student):?>
    <tr>
        <td><?php echo $key+1?></td>
        <td><?php echo  $student->getCode()?></td>
        <td><?php echo  $student->getFirstname()?></td>
        <td><?php echo  $student->getMath()?></td>
        <td><?php echo  $student->getPhysical()?></td>
        <td><?php echo  $student->getChemistry()?></td>
        <td>
            <a href="student_detail.php?id=<?php echo $key?>"><button>Detail</button></a>
        </td>
        <td>
            <a onclick="return confirm('bạn có muốn xóa thông tin')" href="delete_student.php?id=<?php echo $key?>"><button>Delete</button></a>
        </td>
        <td>
            <a href="Edit_student.php?id=<?php echo $key?>"><button>Edit</button></a>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>

</body>
</html>





