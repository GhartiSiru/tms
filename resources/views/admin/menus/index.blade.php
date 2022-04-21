@extends('layouts.main')
@section('title')
    Menu
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @include('admin.components.alert')
                    <div class="col-lg-9">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <table class="table responsive table-hover table-bordered text-center" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Menu</th>
                                            <th>Controller</th>
                                            <th>Link</th>
                                            <th>Icon</th>
                                            <th>Order</th>
                                            <th>Status</th>
                                            <th style="width:100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($menus as $menu)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $menu->menu_name }}</td>
                                                <td style="width:100px;">{{ $menu->menu_controller }}</td>
                                                <td>{{ $menu->menu_link }}</td>
                                                <td>{!! $menu->menu_icon !!}</td>
                                                <td>{{ $menu->order }}</td>
                                                <td>
                                                    @if ($menu->menu_status == 1)
                                                        <span class="badge badge-success badge-btn">Active</span>
                                                    @elseif($menu->menu_status == 0)
                                                        <span class="badge badge-danger badge-btn">Inactive</span>
                                                    @endif
                                                </td>
                                                <td style="width:150px">
                                                  
                                                    {!! Form::open(['method' => 'DELETE', 'url' => ['menus', $menu->id], 'class' => 'd-inline']) !!}
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
                    <!-- /.col-md-3 -->
                    <div class="col-lg-3">
                        <div class="card card-info card-outline">
                            <div class="card-header with-border">
                                <h3 class="card-title">Add Menu</h3>
                            </div>
                            <div class="card-body">
                                @include('admin.menus.create')
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-3 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

@endsection
