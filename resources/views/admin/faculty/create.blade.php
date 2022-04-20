@extends('layouts.main')
@section('content')
@section('title')
Faculty
@endsection
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            {{-- {{ dd($teachers) }} --}}
                            {!! Form::open(['method' => 'post', 'route' => 'faculty.store']) !!}
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    {{ Form::label('teacher_id', 'Name') }} <label for=""
                                        class="text-danger">*</label>
                                    {{ Form::select('teacher_id', $teachers->pluck('lecturer_name', 'id'), Request::has('teacher_id'), ['class' => 'form-control form-control-sm' . ($errors->has('lecturer_name') ? 'is-invalid' : '')]) }}
                                    @error('teacher_id')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    {{ Form::label('faculty_name', 'Faculty Name') }}
                                    <label for="" class="text-danger">*</label>
                                    {{ Form::text('faculty_name', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Faculty Name' . ($errors->has('faculty_name') ? 'is-invalid' : '')]) }}
                                    @error('faculty_name')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </div>

                                <div class="col-md-12 form-group">
                                    {{ Form::label('description', 'Description') }}
                                    <label for="" class="text-danger">*</label>
                                    {{ Form::textarea('description', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Description' . ($errors->has('description') ? 'is-invalid' : '')]) }}
                                    @error('description')
                                        <div><span class="text-danger">{{ $message }}</span></div>
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
