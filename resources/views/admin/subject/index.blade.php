@extends('layouts.main')
@section('title')
    Faculty
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
                            <a href="{{ route('subject.create') }}" class="btn btn-success btn-sm mb-4 px-3">Add Subject</a>
                                <table class="table responsive table-hover table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Lecturer Name</th>
                                            <th>Faculty Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th style="width:100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($subjects as $subject)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $subject->faculty->teacher->lecturer_name }}</td>
                                                <td>{{ $subject->faculty->faculty_name }}</td>
                                                <td>{{ $subject->subject }}</td>
                                                 <td>
                                                    @if ($subject->status == 1)
                                                        <span class="badge badge-success badge-btn">Active</span>
                                                    @elseif($subject->status == 0)
                                                        <span class="badge badge-danger badge-btn">Inactive</span>
                                                    @endif
                                                </td>
                                                <td style="width:150px">
                                                    <a href="{{ route('subject.edit', $subject->id) }}"
                                                        class="text-white text-decoration-none btn btn-info btn-sm">Edit</a>
                                                    {!! Form::open(['method' => 'DELETE', 'url' => ['subject', $subject->id], 'class' => 'd-inline']) !!}
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
