<div class="col-sm-6 col-md-3 m-t-30">
    <div id="edit_exp" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Edit Education Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal m-t-20" action="/experience/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id"">
                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-info text-center rounded-circle text-white mt-0">JP</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Job Position</h5>
                                    <input class="form-control" type="text" placeholder="Enter Course Title" name="job_position" id="job_position" style="border:none" value="{{ old('job_position') }}">
                                </div>
                            </div>
                        </a>
                        @error('course')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror

                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-warning text-center rounded-circle text-white mt-0">CN</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Company Name</h5>
                                    <input class="form-control" type="text" placeholder="Enter School Name" name="company_name" id="company_name"value="{{ old('company_name') }}" style="border:none">
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
                                    <input class="form-control" type="text" placeholder="Enter Date From" name="year_from" id="year_from" onfocus="(this.type='date')" value="{{ old('year_from') }}" style="border:none">
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
                                    <input class="form-control" type="text" placeholder="Enter Date From" name="year_to" id="year_to" onfocus="(this.type='date')" value="{{ old('year_to') }}" style="border:none">
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
               
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>



<div class="col-sm-6 col-md-3 m-t-30">
    <div id="delete_exp" class="modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
