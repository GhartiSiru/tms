<?php

namespace App\Repository;

use App\Models\Teacher;

class TeacherRepository{

     /**
     * @var Menu
     */

     private $teacher;

     public function __construct(Teacher $teacher)
     {
        $this->teacher = $teacher;
     }

     public function all(){

      $teachers = $this->teacher->orderBy('id', 'ASC')->get();
      return $teachers;

     }

     public function findById($id){

        $teachers = $this->teacher->find($id);
        return $teachers;
     }

}

?>
