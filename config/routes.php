<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

$routes->scope('/', function (RouteBuilder $builder) {

    // Student Routes
    $builder->connect('/add-student', ['controller' => 'Students', 'action' => 'addStudent']);
    $builder->connect('/edit-student/:id', ['controller' => 'Students', 'action' => 'editStudent'], ["pass" => ["id"]]);
    $builder->connect('/list-students', ['controller' => 'Students', 'action' => 'listStudents']);

    // Ajax Routes
    $builder->connect('/ajax-add-student', ['controller' => 'Ajax', 'action' => 'ajaxAddStudent']);
    $builder->connect('/ajax-edit-student', ['controller' => 'Ajax', 'action' => 'ajaxEditStudent']);
    $builder->connect('/ajax-delete-student', ['controller' => 'Ajax', 'action' => 'ajaxDeleteStudent']);
});
