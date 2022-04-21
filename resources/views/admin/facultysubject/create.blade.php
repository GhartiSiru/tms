@inject('faculty_helper','App\Helpers\FacultyHelper')
@inject('subject_helper','App\Helpers\SubjectHelper')
@extends('layouts.main')
@section('content')
@section('title')
Faculty Subject
@endsection
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            {!! Form::open(['method' => 'post', 'route' => 'facultysubject.store']) !!}
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    {{ Form::label('faculty_id', 'Faculty Name') }}
                                    {{ Form::select('faculty_id', $faculty_helper->facultyDropdown(), null, ['class' => 'form-control form-control-sm', 'id' => 'faculty' . ($errors->has('faculty_id') ? 'is-invalid' : '')]) }}
                                    @error('faculty_id')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    {{ Form::label('subject_id', 'Subject Name') }}
                                    {{ Form::select('subject_id', $subject_helper->subjectDropdown(), null, ['class' => 'form-control form-control-sm', 'id'=>'subject' . ($errors->has('subject_id') ? 'is-invalid' : '')]) }}
                                    @error('subject_id')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    {{ Form::label('status', 'Status') }} <label for=""
                                        class="text-danger">*</label>
                                    {{ Form::select('status', ['0' => 'Inactive', '1' => 'Active'], null, ['class' => 'form-control form-control-sm' . ($errors->has('status') ? 'is-invalid' : ''),'placeholder' => 'Select Status']) }}
                                    @error('status')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                {{ Form::submit('Save', ['type' => 'submit', 'class' => 'btn btn-info btn-sm mt-4']) }}
                                <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm mt-4 ml-2"> Back</a>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


