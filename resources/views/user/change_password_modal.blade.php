<div class="col-sm-6 col-md-3 m-t-30">
    <!-- sample modal content -->
    <div id="change_password_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Change Password Form</h5>
                    <button type="button" class="close" onclick="location.reload()" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal m-t-20" action="/profile/change-password" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control" type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">

                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-info text-center rounded-circle text-white mt-0">OP</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Old Password</h5>
                                    <input class="form-control" type="password" placeholder="Enter Old Password" name="old_password" style="border:none">
                                </div>
                            </div>
                        </a>
                        @error('old_password')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror

                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-primary text-center rounded-circle text-white mt-0">NP</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">New Password</h5>
                                    <input class="form-control" type="password" placeholder="Enter New Password" name="new_password" style="border:none">
                                </div>
                            </div>
                        </a>
                        @error('new_password')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror

                        <a class="latest-message-list">
                            <div class="border-bottom mt-3 position-relative">
                                <div class="float-left user mr-3">
                                    <h5 class="bg-danger text-center rounded-circle text-white mt-0">CP</h5>
                                </div>
                                
                                <div class="massage-desc">
                                    <h5 class="font-14 mt-0 text-dark">Confirm Password</h5>
                                    <input class="form-control" type="password" id="confirm_password" placeholder="Re-enter Password" name="confirm_password" style="border:none">
                                </div>
                            </div>
                        </a>
                        @error('confirm_password')
                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                        @enderror


                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Change Password</button>
                            </div>
                        </div>

                    </form>
                </div>
               
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
