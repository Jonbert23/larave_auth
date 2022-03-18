@extends('master.admin_master')

@section('style')
    <style>
        .icons{
            font-size: 25px;
            text-shadow: 0 0 1px #000000;
        }

        .delete_icon
        {
            font-size: 100px;
            color: #df4759;
        }
        
    </style>
@endsection

@section('header')
    Job Eperience
@endsection


@section('content')
@include('user.experience.exp_modal')
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Orders</h6>
                        <h4 class="mb-3 mt-0 float-right">1,587</h4>
                    </div>
                    <div>
                        <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                    </div>
                    
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                    </div>
                    <p class="font-14 m-0">Last : 1447</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-info mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Revenue</h6>
                        <h4 class="mb-3 mt-0 float-right">$46,785</h4>
                    </div>
                    <div>
                        <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                    </div>
                    <p class="font-14 m-0">Last : $47,596</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-pink mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Average Price</h6>
                        <h4 class="mb-3 mt-0 float-right">15.9</h4>
                    </div>
                    <div>
                        <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a>
                    </div>
                    <p class="font-14 m-0">Last : 15.8</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-success mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Product Sold</h6>
                        <h4 class="mb-3 mt-0 float-right">1890</h4>
                    </div>
                    <div>
                        <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                    </div>
                    <p class="font-14 m-0">Last : 1776</p>
                </div>
            </div>
        </div>
    </div>  

    <div class="row">
        <div class="col-xl-7">
            <div class="card" style="border-top-color: 10px red">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Job Experience</h4>
                    <ol class="activity-feed mb-0">
                       
                        @foreach($experience as $exp)
                            @if($exp->user_id == Auth::user()->id)
                                <li class="feed-item">
                                    <div class="float-right p-3">
                                        <a href="#" class="text-danger" data-toggle="modal" data-target="#delete_exp" onclick="delete_exp({{ $exp->id }})"><i class="mdi mdi-delete-forever icons "></i></a>
                                        <a href="javascript:void(0)" class="text-info" data-toggle="modal" data-target="#edit_exp" onclick="edit_exp({{ $exp->id }})"><i class="mdi mdi-briefcase-edit icons"></i></a>
                                    </div>
                                    <div class="feed-item-list">
                                        <span class="date text-white-50" style="font-size: 18px; font-weight: bold">{{ $exp->job_position }}</span>
                                        <span class="activity-text text-white">{{ $exp->company_name}}</span><br>
                                        <span class="activity-text text-white">{{ $exp->year_from." - ". $exp->year_to}}</span>
                                    </div>
                                </li>

                            @endif

                        @endforeach

                    </ol>

                </div>
            </div>

        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Add Education Background Form</h4>
                    <form class="form-horizontal m-t-20" action="/experience" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-info text-center rounded-circle text-white mt-0">CO</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Job Position</h5>
                                    <input class="form-control" type="text" placeholder="Enter Job Title" name="job_position" style="border:none" value="{{ old('course') }}">
                                </div>
                            </div>
                        </a>
                        @error('job_position')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror

                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-warning text-center rounded-circle text-white mt-0">SC</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Company Name</h5>
                                    <input class="form-control" type="text" placeholder="Enter School Name" name="company_name" value="{{ old('company_name') }}" style="border:none">
                                </div>
                               
                            </div>
                        </a>
                        @error('company_name')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror
                        
                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-primary text-center rounded-circle text-white mt-0">YF</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Year From</h5>
                                    <input class="form-control" type="text" placeholder="Enter Date From" name="year_from" onfocus="(this.type='date')" value="{{ old('year_from') }}" style="border:none">
                                </div>
                               
                            </div>
                        </a>
                        @error('year_from')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror

                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-success text-center rounded-circle text-white mt-0">YT</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Year To</h5>
                                    <input class="form-control" type="text" placeholder="Enter Date From" name="year_to" onfocus="(this.type='date')" value="{{ old('year_to') }}" style="border:none">
                                </div>
                               
                            </div>
                        </a>
                        @error('year_to')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror
                        

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Submit</button>
                            </div>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function edit_exp(id)
        {
            $.get('/experience/edit/'+id, function(exp)
            {
                $("#id").val(exp.id);
                $("#job_position").val(exp.job_position);
                $("#company_name").val(exp.company_name);
                $("#year_from").val(exp.year_from);
                $("#year_to").val(exp.year_to);
            })
        }
    </script>

    <script>
        function delete_exp(id)
        {
            var a = document.getElementById('delete_button');
            a.href = "/experience/delete/".concat(id);
        }
    </script>

@endsection