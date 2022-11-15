@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome {{ Auth::user()->name }}</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
               <div class="div">
                <h4 class="float-right d-inline"><a href="{{ route('careers.create') }}" class="btn btn-info" >Add post</a></h4>
               </div>
               <br><br>

                <div class="card col-md-12">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">Post Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0" id="post_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Applicants Name</th>
                                        <th>Department</th>
                                        <th>Application Date</th>
                                        <th>Attachment</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop ->index+1}}</td>
                                        <td>{{ $data ->name }}
                                            @if ($data->status == 1)
                                            <span class="badge badge-info">new</span>
                                            @elseif ($data->status == 2)
                                            <span class="badge badge-warning">shortlisted</span>
                                            @elseif ($data->status == 3)
                                            <span class="badge badge-danger">Rejected</span>
                                            @elseif ($data->status == 4)
                                            <span class="badge badge-success">Hired</span>
                                            @elseif ($data->status == 5)
                                            <span class="badge badge-info">checked</span>
                                            @endif
                                        </td>

                                        <td>{{ $data->job_position }}</td>
                                        <td>{{ $data->created_at->diffForHumans() }}</td>
                                        <td><a href="{{ URL::to('') }}/media/resume/{{ $data->attachment}}" download="{{ $data ->name }}" onclick="view()"><i class="fa-solid fa-file-pdf" style="color:red;text-align:center;font-size:30px"></i></a></td>




                                        <td>


                                            <a href="{{ url('application-checked',$data->id) }}" class="btn btn-sm btn-warning"  data-toggle="tooltip" title="Checked"><i class="fa-solid fa-check"></i> </a>
                                            <a href="{{ url('shorlist-update',$data->id) }}" class="btn btn-sm btn-success"  data-toggle="tooltip" title="Shortlisted"><i class="fa-solid fa-table-list"></i> </a>
                                            <a href="{{ url('job-hired',$data->id) }}" class="btn btn-sm btn-info"  data-toggle="tooltip" title="Hired"><i class="fa-solid fa-check-double"></i> </a>
                                            <a href="{{ url('application-rejected',$data->id) }}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Rejected"><i class="fa fa-trash" aria-hidden="true"></i> </a>

                                        {{--     <form action="{{ route('job-applications.destroy', $data->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                            <button class=" btn btn-sm btn-danger del_button" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>







@endsection


