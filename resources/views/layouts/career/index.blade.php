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
                                        <th>Job Title</th>
                                        <th>Job Position</th>
                                        <th>Published Date</th>
                                        <th>Application_Deadline</th>
                                        <th>posted By</th>
                                        <th>Published Status</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop ->index+1}}</td>
                                        <td>{{ $data ->title }}

                                            @if ($data->status == 0)
                                            <span class="badge badge-warning">unpublished</span>
                                            @endif

                                            @php
                                                $today = date("Y-m-d");
                                                $expireday= $data->apply_deadline;

                                                $today_time = strtotime($today);
                                                $expire_time = strtotime($expireday);
                                            @endphp

                                            @if ($expire_time < $today_time )

                                                <span class="badge badge-danger">Expired</span>
                                            @endif

                                        </td>
                                        <td>{{ $data->category }}</td>
                                        <td>{{ $data->created_at->format('d M Y') }}</td>
                                        <td>{{ date('d-m-Y', strtotime($data->apply_deadline))}}</td>
                                        {{-- <td>{{ $data->apply_deadline ->isoFormat('MMM Do YYYY')}}</td> --}}
                                        <td>{{ $data ->Author->name }}</td>


                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" status_id={{ $data->id }} {{ $data-> status == true ? 'checked="checked"':'' }} id="cat_status_{{$loop->index+1 }}" class="check">
                                                    <label for="cat_status_{{ $loop->index+1 }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>

                                        <td>
                                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i> </a>

                                            <a href="{{ route('careers.edit',$data->id) }}"  class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                                            <form action="{{ route('careers.destroy', $data->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                            <button class=" btn btn-sm btn-danger del_button" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
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


