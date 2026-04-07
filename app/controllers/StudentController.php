<?php
namespace App\Controllers;
require_once '../app/core/controllers.php';

use App\Core\controllers;
class StudentController extends controllers
{
    public function index()
    {
        $this->view('students.index');
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
