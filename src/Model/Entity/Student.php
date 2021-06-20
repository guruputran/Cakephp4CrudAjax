<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Student extends Entity
{
    protected $_accessible = [
        "name" => true,
        "email" => true,
        "phone_no" => true
    ];
}
