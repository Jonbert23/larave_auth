@extends('master.admin_master')

@section('style')
    <style>
        .upload-box{
            font-size: 12px;
            background: #5985EE;
            color: white;
            border-radius: 50px;
            width: 90%;
            outline: none;
        }
        ::-webkit-file-upload-button{
            color: white;
            background: #29d6a5;
            padding: 8px;
            border-radius: 50px;
            box-shadow: 1px #350101;
            border: none;
            outline: none;
        }
        ::-webkit-file-upload-button:hover{
            background: #2bd465;
        }
    </style>
@endsection

@section('header')
    My Profile
@endsection

@section('content')
@include('user.user_edit_modal')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Profile Details</h4>

                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <img class="mb-4" src="{{ asset($user->photo) }}" style="width:100%; height:320px">
                    </div>


                    <div class="col-md-4">
                        <div class="latest-massage">
                            <a class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-primary text-center rounded-circle text-white mt-0">FN</h5>
                                    </div>
                                   
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">Full Name</h5>
                                        <p class="text-muted">{{ $user->first_name."  ".$user->last_name }}</p>
                                    </div>
                                </div>
                            </a>

                            <a class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-warning text-center rounded-circle text-white mt-0">GE</h5>
                                    </div>
                                   
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">Gender</h5>
                                        <p class="text-muted">{{ $user->gender }}</p>
                                    </div>
                                </div>
                            </a>

                            <a class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-pink text-center rounded-circle text-white mt-0">CN</h5>
                                    </div>
                                   
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">Contact Number</h5>
                                        <p class="text-muted">{{ $user->phone }}</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-success text-center rounded-circle text-white mt-0">EA</h5>
                                    </div>
                                   
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">Email Address</h5>
                                        <p class="text-muted">{{ $user->email }}</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="latest-massage">

                            <a  class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-info text-center rounded-circle text-white mt-0">BD</h5>
                                    </div>
                                   
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">Birth Date</h5>
                                        <p class="text-muted">{{ $user->b_date }}</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a  class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-danger text-center rounded-circle text-white mt-0">AD</h5>
                                    </div>
                                   
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">Address</h5>
                                        <p class="text-muted">{{ $user->address }}</p>
                                    </div>
                                </div>
                            </a>
                           
                            <div class="row justify-content-center mt-4">
                                <a data-toggle="modal" data-target="#profile_edit_modal" class="btn btn-primary px-5" style="color:white;"onclick=" edit_profile({{ $user->id }})">Edit Profile</a>

                            </div>
                            

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

    
@endsection

@section('script')
    <script>
        function edit_profile(id)
        { 
            $.get('/profile/edit/'+id, function(user)
            {
                $("#id").val(user.id);
                $("#first_name").val(user.first_name);
                $("#last_name").val(user.last_name);
                $("#gender").val(user.gender);
                $("#phone").val(user.phone);
                $("#email").val(user.email);
                $("#b_date").val(user.b_date);
                $("#address").val(user.address);

                var img = document.createElement("img");
                img.src = "http://127.0.0.1:8000/".concat(user.photo);

                console.log(user.photo);

                var div = document.getElementById("photo");
                div.appendChild(img);
                img.setAttribute("style", "width:100%");
                img.setAttribute("style", "height:300px");
            })
        }
    </script>
@endsection