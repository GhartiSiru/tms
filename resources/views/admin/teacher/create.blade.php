@extends('layouts.main')
@section('content')
    @section('title')
Teacher
@endsection
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            {!! Form::open(['method' => 'post', 'route' => 'teacher.store']) !!}
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    {{ Form::label('lecturer_name', 'Name') }} <label for=""
                                        class="text-danger">*</label>
                                    {{ Form::text('lecturer_name', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Lecturer Name' . ($errors->has('lecturer_name') ? 'is-invalid' : '')]) }}
                                    @error('lecturer_name')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    {{ Form::label('gender', 'Gender') }}
                                    <label for="" class="text-danger">*</label>
                                    {{ Form::select('gender', config('teacher.gender'), null, ['class' => 'form-control form-control-sm' . ($errors->has('gender') ? 'is-invalid' : '')]) }}
                                    @error('gender')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    {{ Form::label('phone_num', 'Phone Number') }}
                                    <label for="" class="text-danger">*</label>
                                    {{ Form::number('phone_num', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Phone Number' . ($errors->has('phone_num') ? 'is-invalid' : '')]) }}
                                    @error('phone_num')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    {{ Form::label('email', 'Email') }}
                                    <label for="" class="text-danger">*</label>
                                    {{ Form::email('email', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Email' . ($errors->has('email') ? 'is-invalid' : '')]) }}
                                    @error('email')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    {{ Form::label('address', 'Address') }}
                                    <label for="" class="text-danger">*</label>
                                    {{ Form::text('address', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Address' . ($errors->has('address') ? 'is-invalid' : '')]) }}
                                    @error('address')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    {{ Form::label('dob', 'Date of Birth') }}
                                    <label for="" class="text-danger">*</label>
                                    {{ Form::date('dob', null, ['class' => 'form-control form-control-sm' . ($errors->has('dob') ? 'is-invalid' : '')]) }}
                                    @error('dob')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    {{ Form::label('nationality', 'nationality') }}
                                    <label for="" class="text-danger">*</label>
                                    {{ Form::text('nationality', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Nationality' . ($errors->has('nationality') ? 'is-invalid' : '')]) }}
                                    @error('nationality')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-6 form-group">
        {{ Form::label('menu_status', 'Status') }}
        <label for="" class="text-danger">*</label>
        {{Form::radio('menu_status', '1','true',['class'=>'flat-red'])}}&nbsp;&nbsp;Active &nbsp;&nbsp;&nbsp;
        {{Form::radio('menu_status', '0',null,['class'=>'flat-red'])}}&nbsp;&nbsp;Inactive
        @error('menu_status')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>
    <div class="col-md-12 form-group p-0 m-0">
        {{ Form::label('order', 'Order') }}
        <label for="" class="text-danger">*</label>
        {{ Form::text('order', null, ['class' => 'form-control form-control-sm' . ($errors->has('order') ? 'is-invalid' : '')]) }}
        @error('order')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div> --}}
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
