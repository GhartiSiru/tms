<?php

namespace App\Http\Controllers;

use App\Models\FacultySubject;
use Illuminate\Http\Request;

class FacultySubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.facultysubject.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facultysubject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacultySubject  $facultySubject
     * @return \Illuminate\Http\Response
     */
    public function show(FacultySubject $facultySubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacultySubject  $facultySubject
     * @return \Illuminate\Http\Response
     */
    public function edit(FacultySubject $facultySubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FacultySubject  $facultySubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacultySubject $facultySubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacultySubject  $facultySubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacultySubject $facultySubject)
    {
        //
    }
}
