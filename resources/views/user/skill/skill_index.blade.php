@extends('master.admin_master')

@section('style')
    <link href="{{ asset('backend/css/progressbar.css')}}" rel="stylesheet" type="text/css">
    <style>
        .icons{
            font-size: 25px;
        }

        .icons:hover{
            font-size: 30px;
        }

        .add_icon{
            font-size: 35px;
            margin-top: -70px;
            paading-buttom: 50px;
        }

        .delete_icon
        {
            font-size: 100px;
            color: #df4759;
        }
        .p-bar
        {
            margin: auto;
        }
        
    </style>
@endsection

@section('header')
    Skills List
    
@endsection

@section('content')
@include('user.skill.skill_modal')

<div class="row">


    @foreach($skill as $skills)
        @if($skills->user_id == Auth::user()->id)
            <div class="col-xl-4 col-md-6">
                <div class="card mini-stat">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h5 class="text-uppercase mt-0 float-left">{{ $skills->skill_name}}</h5>
                            <div class="float-right">
                                <a href="#" class="text-danger" data-toggle="modal" data-target="#delete_skill" onclick="delete_skill({{ $skills->id }})"><i class="mdi mdi-delete-forever h5"></i></a>
                                <a href="#" class="text-info" data-toggle="modal" data-target="#edit_skill" onclick="edit_skill({{ $skills->id }})"><i class="mdi mdi-briefcase-edit h5"></i></a>
                            </div>
                        </div>

                        <div class="progress-circle over50 p{{ $skills->mastery }} p-bar">
                            <span>{{ $skills->mastery }}%</span>
                            <div class="left-half-clipper">
                            <div class="first50-bar"></div>
                            <div class="value-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <p class="font-12 m-0 text-uppercase text-bold">skill type: {{ $skills->skill_type }} </p>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    

    <div class="col-xl-4 col-md-6">
        <div class="card mini-stat">
            <div class="p-3 mini-stat-desc">
                <div class="clearfix">
                    <h5 class="text-uppercase mt-0 float-left">Add Skill</h5>
                </div>

                <div class="text-center pb-5">
                    <a href="#" class="text-white rounded-circle bg-primary px-2" data-toggle="modal" data-target="#add_skill"   style="font-size:69px"><i class="mdi mdi-plus"></i></a>
                </div>
                
            </div>
        </div>
    </div>

</div>  

@endsection

@section('script')
    <script>
        function edit_skill(id)
        {
            $.get('/skill/edit/'+id, function(skill)
            {
                $("#id").val(skill.id);
                $("#title").val(skill.skill_name);
                $("#type").val(skill.skill_type);
                $("#mastery").val(skill.mastery);

            })
        }
    </script>

<script>
    function delete_skill(id)
    {
        var a = document.getElementById('delete_button');
        a.href = "/skill/delete/".concat(id);
    }
</script>

@endsection