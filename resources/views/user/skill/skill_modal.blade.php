<div class="col-sm-6 col-md-3 m-t-30">
    <div id="add_skill" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add Skill Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal m-t-20" action="/skill" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-info text-center rounded-circle text-white mt-0">ST</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Skill Title</h5>
                                    <input class="form-control" type="text" placeholder="Enter Skill Title" name="skill_title" id="skill_title" style="border:none" value="{{ old('skill_title') }}">
                                </div>
                            </div>
                        </a>
                        @error('skill_title')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror

                        <a class="latest-message-list col-md-6">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-info text-center rounded-circle text-white mt-0">GE</h5>
                                </div>
                               
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Skill Type</h5>
                                    <select type="text" class="form-control " id="skill_type" name="skill_type" value="{{ old('gender') }}" style="border:none">
                                        <option value="" disabled selected>Select Skill Type</option>
                                        <option value="professional">Professional</option>
                                        <option value="basic">Basic</option>
                                        <option value="language">Language</option>
                                    </select>
                                </div>
                            </div>
                        </a>
                        @error('skill_type')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror
                        
                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-primary text-center rounded-circle text-white mt-0">SM</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Skill Mastery</h5>
                                    <input class="form-control" type="number" placeholder="Rate Your Mastery of this Skill 50-100" name="skill_mastery" id="skill_mastery""  value="{{ old('skill_mastery"') }}" style="border:none">
                                </div>
                               
                            </div>
                        </a>
                        @error('skill_mastery')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
               
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>



<div class="col-sm-6 col-md-3 m-t-30">
    <div id="edit_skill" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Edit Skill Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal m-t-20" action="/skill/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-info text-center rounded-circle text-white mt-0">ST</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Skill Title</h5>
                                    <input class="form-control" type="text" placeholder="Enter Skill Title" name="skill_title" id="title" style="border:none" value="{{ old('skill_title') }}">
                                </div>
                            </div>
                        </a>
                        @error('skill_title')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror

                        <a class="latest-message-list col-md-6">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-info text-center rounded-circle text-white mt-0">GE</h5>
                                </div>
                               
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Skill Type</h5>
                                    <select type="text" class="form-control " id="type" name="skill_type" value="{{ old('skill_type') }}" style="border:none">
                                        <option value="" disabled selected>Select Skill Type</option>
                                        <option value="professional">Professional</option>
                                        <option value="basic">Basic</option>
                                        <option value="language">Language</option>
                                    </select>
                                </div>
                            </div>
                        </a>
                        @error('skill_type')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror
                        
                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-primary text-center rounded-circle text-white mt-0">SM</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Skill Mastery</h5>
                                    <input class="form-control" type="number" placeholder="Rate Your Mastery of this Skill 50-100" name="skill_mastery" id="mastery""  value="{{ old('skill_mastery"') }}" style="border:none">
                                </div>
                               
                            </div>
                        </a>
                        @error('skill_mastery')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
               
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>



<div class="col-sm-6 col-md-3 m-t-30">
    <div id="delete_skill" class="modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="mdi mdi-delete-forever delete_icon"></i>
                        <h5 class="text-center"> Are you sure you want to delete this item?</h5> <br>                
                        <a  class="btn btn-primary btn-lg px-4" data-dismiss="modal" style="color:white;">Cancel</a>
                        <a class="btn btn-danger btn-lg px-4" id="delete_button" style="color:white;">Delete</a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
