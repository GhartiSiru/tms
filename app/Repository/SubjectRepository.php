<?php

namespace App\Repository;

use App\Models\Subject;

class SubjectRepository{

     /**
     * @var Menu
     */

     private $teacher;

     public function __construct(Subject $subject)
     {
        $this->subject = $subject;
     }

     public function all(){

      $subjects = $this->subject->orderBy('id', 'ASC')->get();
      return $subjects;

     }

     public function findById($id){

        $subjects = $this->subject->find($id);
        return $subjects;
     }

}

?>
