<?php

namespace App\Http\Controllers;

use App\Repository\FacultyRepository;
use App\Repository\SubjectRepository;
use App\Repository\TeacherRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TeacherRepository $teacher, SubjectRepository $subject, FacultyRepository $faculty)
    {
        $this->middleware('auth');
        $this->faculty = $faculty;
       $this->subject = $subject;
       $this->teacher = $teacher;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $teachers = $this->teacher->all();
        $faculties = $this->faculty->all();
        $subjects = $this->subject->all();
        return view('home', ['teachers' => $teachers, 'faculties' => $faculties, 'subjects' => $subjects]);
    }
}
