<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Repository\FacultyRepository;
use App\Repository\TeacherRepository;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(TeacherRepository $teacher, FacultyRepository $faculty)
    {
       $this->teacher = $teacher;
       $this->faculty = $faculty;
    }

    public function index()
    {
        $faculties = $this->faculty->all();
        return view('admin.faculty.index', ['faculties'=>$faculties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = $this->teacher->all();
        return view('admin.faculty.create',['teachers' => $teachers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'teacher_id' => 'required|string|max:255',
            'faculty_name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'status' => 'required',
        ];

        $validate = $request->validate($rules);
        $create = Faculty::create($validate);
        if($create)
        {
            session()->flash('success', 'Faculty Data Created Successfully');
            return redirect()->route('faculty.index');
        }
        else{
            session()->flash('danger', 'Faculty could not created');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faculty = $this->faculty->findById($id);
        $faculty->delete();
        session()->flash('message', 'Faculty deleted successfully');
        return back();
    }
}
