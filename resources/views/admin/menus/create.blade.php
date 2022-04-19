{{-- @if (session('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('danger') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif --}}

{!! Form::open(['method' => 'post', 'route' => 'menus.store']) !!}
<div class="form-row">
    <div class="col-md-12 form-group p-0 m-0">
        {{ Form::label('menu_name', 'Name') }} <label for=""
            class="text-danger">*</label>
        {{ Form::text('menu_name', null, ['class' => 'form-control form-control-sm' . ($errors->has('menu_name') ? 'is-invalid' : ''),]) }}
        @error('menu_name')
            <div>
                <span class="text-danger">{{ $message }}</span>
            </div>
        @enderror
    </div>

    <div class="col-md-12 form-group p-0 m-0">
        {{ Form::label('menu_controller', 'Controller') }}
        <label for="" class="text-danger">*</label>
        {{ Form::text('menu_controller', null, ['class' => 'form-control form-control-sm' . ($errors->has('menu_controller') ? 'is-invalid' : '')]) }}
        @error('menu_controller')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>
    <div class="col-md-12 form-group p-0 m-0">
        {{ Form::label('menu_link', 'Link') }}
        <label for="" class="text-danger">*</label>
        {{ Form::text('menu_link', null, ['class' => 'form-control form-control-sm' . ($errors->has('menu_link') ? 'is-invalid' : '')]) }}
        @error('menu_link')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>

    <div class="col-md-12 form-group p-0 m-0">
        {{ Form::label('menu_icon', 'Icon') }}
        <label for="" class="text-danger">*</label>
        {{ Form::text('menu_icon', null, ['class' => 'form-control form-control-sm' . ($errors->has('menu_icon') ? 'is-invalid' : '')]) }}
        @error('menu_icon')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>
    <div class="col-md-12 form-group p-0 m-0">
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
    </div>
    {{ Form::submit('Save', ['type' => 'submit', 'class' => 'btn btn-info btn-sm mt-4']) }}
    <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm mt-4 ml-2"> Back</a>
</div>
{!! Form::close() !!}
