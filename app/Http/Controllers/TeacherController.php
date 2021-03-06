<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Repository\TeacherRepository;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(TeacherRepository $teacher)
    {
       $this->teacher = $teacher;
    }

    public function index()
    {
        $teachers = $this->teacher->all();
        return view('admin.teacher.index', ['teachers'=>$teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
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
            'lecturer_name' => 'required|string|max:255',
            'gender' => 'required|integer|max:255',
            'phone_num' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'dob' => 'required|date'
        ];

        $validate = $request->validate($rules);
        $create = Teacher::create($validate);
        // dd($create);
        if($create)
        {
            session()->flash('success', 'Teacher Data Created Successfully');
            return redirect()->route('teacher.index');

        }
        else{
            session()->flash('danger', 'Teacher could not created');
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = $this->teacher->findById($id);
        $teacher->delete();
        session()->flash('message', 'Teacher deleted successfully');
        return back();
    }
}
