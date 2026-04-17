<?php
namespace App\Controllers;
require_once '../app/core/controllers.php';
require_once '../app/models/Student.php';

use App\Core\controllers;
use App\models\Student;
class StudentController extends controllers
{
    public function index()
    {
        $studentModel = new Student();
        $students = $studentModel->getStudents();      


        $this->view('students.index', [
            'students' => $students 
        ]);
    }

    public function create()
    {
        $this->view('students.create');
    }

public function show(string $id)
    {
        $this->view('students.show', ['id' => $id]);
    }
public function edit(string $id)
    {
        $this->view('students.edit', ['id' => $id]);
        // Implementasi untuk menampilkan form edit siswa
    }
}
