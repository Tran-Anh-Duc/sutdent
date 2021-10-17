<?php

include_once "../models/student.php";

class StudentManager
{
    private array $students;
    private string $path = __DIR__ . "/student.json";

    public function __construct()
    {
        $this->students = $this->load();
    }

    //hien thi danh sach hoc sinh

    public function getAllStudent(): array
    {
        return $this->students;
    }

    // them hoc vien

    public function storeStudents($student): void
    {
        array_push($this->students, $student);
        $this->save();
    }

    //xem thong tin chi tiet hoc vien

    public function getStudentById($id)
    {
        return $this->students[$id];
    }


    public function save()
    {
        $dataJson = json_encode($this->students);
        file_put_contents($this->path, $dataJson);
    }

    public function load(): array
    {
        $dataJson = file_get_contents($this->path);
        $data = json_decode($dataJson, true);
        return $this->convertToStudent($data);
    }

    public function convertToStudent($data): array
    {

        $students = [];
        foreach ($data as $e) {
            $student = new Student($e["code"], $e["firstname"], $e["math"], $e["physical"], $e["chemistry"]);
            $students[] = $student;//array_push
        }
        return $students;
    }

    public function showLog($data)
    {
        echo "<pre>";
        var_dump($data);
        die();
    }

    public function deleteStudentById($id)
    {
        array_splice($this->students, $id, 1);
        $this->save();
    }


}
