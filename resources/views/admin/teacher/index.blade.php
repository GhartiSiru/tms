@extends('layouts.main')
@section('title')
    Teacher
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @include('admin.components.alert')
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                            <a href="{{ route('teacher.create') }}" class="btn btn-success btn-sm mb-4 px-3">Add Teacher</a>
                                <table class="table responsive table-hover table-bordered text-center" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Lecturer Name</th>
                                            <th>Phone Number</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Nationality</th>
                                            <th style="width:100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($teachers as $teacher)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $teacher->lecturer_name }}</td>
                                                <td>{{ $teacher->phone_num }}</td>
                                                <td>{{ config('teacher.gender.'.$teacher->gender) }}</td>
                                                <td>{{ $teacher->email }}</td>
                                                <td>{{  $teacher->address  }}</td>
                                                <td>{{ $teacher->dob }}</td>
                                                <td>{{ $teacher->nationality }}</td>
                                                {{-- <td>
                                                    @if ($menu->menu_status == 1)
                                                        <span class="badge badge-success badge-btn">Active</span>
                                                    @elseif($menu->menu_status == 0)
                                                        <span class="badge badge-danger badge-btn">Inactive</span>
                                                    @endif
                                                </td> --}}
                                                <td style="width:150px">
                                                    <a href="{{ route('teacher.edit', $teacher->id) }}"
                                                        class="text-white text-decoration-none btn btn-info btn-sm">Edit</a>
                                                    {!! Form::open(['method' => 'DELETE', 'url' => ['teacher', $teacher->id], 'class' => 'd-inline']) !!}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="javascript:return confirm('Are you sure you want to delete?');">Delete</button>

                                                    {!! Form::close() !!}
                                                </td>

                                            </tr>
                                        @empty
                                            <table class="table text-center">
                                                <th>No data found!!</th>
                                            </table>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

@endsection
