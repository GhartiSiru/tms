<?php

namespace App\Repository;

use App\Models\Faculty;
use App\Models\Teacher;

class FacultyRepository{

     /**
     * @var Menu
     */

     private $teacher;

     public function __construct(Faculty $faculty)
     {
        $this->faculty = $faculty;
     }

     public function all(){

      $faculties = $this->faculty->with('teacher')->orderBy('id', 'ASC')->get();
      return $faculties;

     }

     public function findById($id){

        $faculties = $this->faculty->find($id);
        return $faculties;
     }

}

?>
