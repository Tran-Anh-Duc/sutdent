<?php
include_once "models/student.php";
include_once "services/studentManager.php";

$id = $_GET['id'];
$studentManager = new StudentManager();
$student = $studentManager->getStudentById($id);
// $studentManager -> showLog($student)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    <title>sua thong tin </title>
</head>
<style>
    button:hover{
        background-color: #7b01fe;
        border-radius:2px ;
    }
</style>
<body style="background-color: #04AA6D">

<h3>sua thong tin sinh vien</h3>

<div class="container">
    <form method="post">
        <label for="code">Code</label>
        <input type="number" id="code" name="code" placeholder="Your code.."
               value ="<?php echo  $student->getCode()?>"
        >

        <label for="firstname">Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Your  name.."
               value ="<?php echo  $student->getFirstname()?>"
        >

        <label for="math">Math</label>
        <input type="number" id="math" name="math" placeholder="Your math.."
               value ="<?php echo  $student->getMath()?>"
        >

        <label for="physical">Physical</label>
        <input type="number" id="physical" name="physical" placeholder="Your physical.."
               value ="<?php echo  $student->getPhysical()?>"
        >

        <label for="chemistry">Chemistry</label>
        <input type="number" id="chemistry" name="chemistry" placeholder="Your Chemistry.."
               value ="<?php echo  $student->getChemistry()?>"
        >

        <input type="submit" value="Submit">

    </form>
    <a href="index_student.php"><button style="width: 100%;margin-top: 5px;">back</button></a>



</div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student = [
        "code" => $_REQUEST["code"],
        "firstname" => $_REQUEST["firstname"],
        "math" => $_REQUEST["math"],
        "physical" => $_REQUEST["physical"],
        "chemistry" => $_REQUEST["chemistry"]
    ];

}
?>


