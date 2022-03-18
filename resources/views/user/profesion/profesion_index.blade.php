@extends('master.admin_master')

@section('style')
    <style>
        .icons{
            font-size: 25px;
        }

        .icons:hover{
            font-size: 30px;
        }

        .add_icon{
            font-size: 35px;
        }

        .add_icon:hover{
            font-size: 40px;
        }
        .delete_icon
        {
            font-size: 100px;
            color: #df4759;
        }
        
    </style>
@endsection

@section('header')
    Profession List
@endsection

@section('content')
@include('user.profesion.profesion_modals')

<div class="row">
    <div class="col-md-12">
        <div class="card bg-info mini-stat text-white">
            <div class="p-3 mini-stat-desc">
                <div class="clearfix">
                    <h6 class="text-uppercase mt-0 float-left text-white-50">Profession Counts</h6>
                    <h4 class="mb-3 mt-0 float-right">{{ $prof_count }}</h4>
                </div>
                <div>
                    <span class="badge badge-light text-info"> {{ 4 - $prof_count }} </span> <span class="ml-2">Counts of professions that can still be entered</span>
                </div>
                
            </div>
            <div class="p-3">
                <div class="float-right">
                    <a href="#" class="text-white-50"><i class="mdi mdi-calendar h5"></i></a>
                </div>
                <p class="font-14 m-0">Last Activity : {{ $last_activity->diffForHumans() }}</p>
            </div>
        </div>
    </div>
    
</div>  

<div class="row">
    <div class="col-xl-9">
        <div class="card">
            <div class="card-body">
               <div class="float-right">
                 <a href="#" data-toggle="modal" data-target="#add_profesion" class="text-primary"> <i class="mdi mdi-plus add_icon"></i> </a>
               </div>
                <h4 class="mt-0 header-title mb-4">PROFESSION LIST </h4>
                <br>
                
                <div class="latest-massage">
                    @php($i = 1)
                    @php($color = '')
                    @foreach($profesion as $profesions)
                        @if (Auth::user()->id == $profesions->user_id)
                            @php($display = $profesions->title )
                            @if($i == 1)
                               @php($color = "info")
                            @endif
                            @if($i == 2)
                                @php($color = "success")
                            @endif
                            @if($i == 3)
                                @php($color = "warning")
                            @endif
                            @if($i == 4)
                                @php($color = "primary")
                            @endif
                            @php($i++)
                            <a class="latest-message-list">
                                <div class="border-bottom position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-{{ $color }} text-center rounded-circle text-uppercase text-white mt-0">{{ $display[0].''.$display[1] }}</h5>
                                    </div>
                                    <div class="float-right">
                                        {{-- <a href="/profesion/delete/{{ $profesions->id }}" class="text-danger"><i class="mdi mdi-delete-forever icons"></i></a> --}}
                                        <a href="#" data-toggle="modal" onclick="delete_profesion({{ $profesions->id }})"data-target="#delete_profesion" class="text-danger"><i class="mdi mdi-delete-forever icons"></i></a>
                                        <a href="javascript:void(0)" onclick="edit_profesion({{ $profesions->id }})" data-toggle="modal" data-target="#edit_profesion" class="text-info"><i class="mdi mdi-briefcase-edit icons"></i></a>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark text-capitalize">{{ $profesions->title }}</h5>
                                        <p class="text-muted" style="font-size:11px;" >Added on: {{ $profesions->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </a>
                            <br>
                            
                        @endif
                    @endforeach
                   
                </div>

            </div>
        </div>

    </div>
    <!-- end col -->
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">PROFESSION Info</h4>
                
                <p class="text-justify ">
                    Note: There are only four professions that 
                    can be displayed on your website, so make sure to include the ones 
                    that you know the most about. However, those features are still being worked on.
                    <br>
                    <br>
                    I'm hoping for your patience and considerations.
                </p>
            </div>
        </div>

    </div>
</div>

@endsection

@section('script')
    <script>
        function edit_profesion(id)
        {
            $.get('/profesion/edit/'+id, function(profesion)
            {
                $("#id").val(profesion.id);
                $("#profesion").val(profesion.title);

            })
        }
    </script>

<script>
    function delete_profesion(id)
    {
        var a = document.getElementById('delete_button');
        a.href = "/profesion/delete/".concat(id);
    }
</script>

@endsection