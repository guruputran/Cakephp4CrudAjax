<?php

namespace App\Controller;

use App\Controller\AppController;

class StudentsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadModel("Students");
        // Created app.php file inside /templates/layout/app.php
        $this->viewBuilder()->setLayout("app");
    }

    public function addStudent()
    {
        $this->set("title", "Add Stduent");
    }

    public function listStudents()
    {
        $students = $this->Students->find()->toList();
        $this->set("title", "List Student");
        $this->set(compact("students"));
    }

    public function editStudent($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('student'));
        $this->set("title", "Edit Student");
    }
}
