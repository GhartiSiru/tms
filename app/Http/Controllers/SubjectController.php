<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Repository\FacultyRepository;
use App\Repository\SubjectRepository;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(SubjectRepository $subject, FacultyRepository $faculty)
    {
       $this->faculty = $faculty;
       $this->subject = $subject;
    }

    public function index()
    {
        $subjects = $this->subject->all();
        return view('admin.subject.index', ['subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty = $this->faculty->all();
        return view('admin.subject.create', ['faculty' => $faculty]);

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
            'faculty_id' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'status' => 'required',
        ];

        $validate = $request->validate($rules);
        $create = Subject::create($validate);
        if($create)
        {
            session()->flash('success', 'Subject Data Created Successfully');
            return redirect()->route('subject.index');

        }
        else{
            session()->flash('danger', 'Subject could not created');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = $this->subject->findById($id);
        $subject->delete();
        session()->flash('message', 'Subject deleted successfully');
        return back();
    }
}
