<div class="col-sm-6 col-md-3 m-t-30">
    <!-- sample modal content -->
    <div id="profile_edit_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Edit Profile</h5>
                    <button type="button" class="close" onclick="location.reload()" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal m-t-20" action="/profile/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control" type="hidden" id="id" name="id">

                        <div class="row">
                            <div class="col-md-5"> 
                                <div id="photo" class=""></div>
                                
                                <div class="form-group pt-3">
                                    <label pl-3  class="form-label ">Update Profile Photo</label><br>
                                    <input type="file" class="upload-box" name="profile_photo">
                                  
                                </div>
                            </div>

                            <div class="col-md-7">

                                <div class="row">
                                    <a class="latest-message-list col-md-6">
                                        <div class="border-bottom mt-3 position-relative">
                                            <div class="float-left user mr-3">
                                                <h5 class="bg-primary text-center rounded-circle text-white mt-0">FN</h5>
                                            </div>
                                           
                                            <div class="massage-desc">
                                                <h5 class="font-14 mt-0 text-dark">First Name</h5>
                                                <input class="form-control" type="text" id="first_name" placeholder="Firts Name" name="first_name" value="{{ old('first_name') }}" style="border:none">
                                            </div>
                                        </div>
                                    </a>
                                    @error('first_name')
                                        {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                    @enderror
    
                                    <a class="latest-message-list col-md-6">
                                        <div class="border-bottom mt-3 position-relative">
                                            <div class="float-left user mr-3">
                                                <h5 class="bg-pink text-center rounded-circle text-white mt-0">LN</h5>
                                            </div>
                                           
                                            <div class="massage-desc">
                                                <h5 class="font-14 mt-0 text-dark">Last Name</h5>
                                                <input class="form-control" type="text" id="last_name" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" style="border:none">
                                            </div>
                                        </div>
                                    </a>
                                    @error('last_name')
                                        {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                    @enderror
                                </div>

                                <div class="row">
                                    <a class="latest-message-list col-md-6">
                                        <div class="border-bottom mt-3 position-relative">
                                            <div class="float-left user mr-3">
                                                <h5 class="bg-info text-center rounded-circle text-white mt-0">GE</h5>
                                            </div>
                                           
                                            <div class="massage-desc">
                                                <h5 class="font-14 mt-0 text-dark">Gender</h5>
                                                <select type="text" class="form-control " id="gender" name="gender" required="required" value="{{ old('gender') }}" style="border:none">
                                                    <option value="" disabled selected>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </a>
                                    @error('gender')
                                        {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                    @enderror
            
    
                                    <a class="latest-message-list col-md-6">
                                        <div class="border-bottom mt-3 position-relative">
                                            <div class="float-left user mr-3">
                                                <h5 class="bg-success text-center rounded-circle text-white mt-0">BD</h5>
                                            </div>
                                           
                                            <div class="massage-desc">
                                                <h5 class="font-14 mt-0 text-dark">Birth Date</h5>
                                                <input class="form-control" type="text" id="b_date"  placeholder="Birth Date" name="b_date" value="{{ old('b_date') }}" onfocus="(this.type='date')" style="border:none">
                                            </div>
                                        </div>
                                    </a>
                                    @error('b_date')
                                        {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                    @enderror

                                </div>

                                <div class="row">
                                    <a class="latest-message-list col-md-6">
                                        <div class="border-bottom mt-3 position-relative">
                                            <div class="float-left user mr-3">
                                                <h5 class="bg-warning text-center rounded-circle text-white mt-0">PH</h5>
                                            </div>
                                           
                                            <div class="massage-desc">
                                                <h5 class="font-14 mt-0 text-dark">Phone</h5>
                                                <input class="form-control" type="text"  id="phone"  placeholder="Contact Number" name="phone" value="{{ old('phone') }}" style="border:none">
                                            </div>
                                        </div>
                                    </a>
                                    @error('phone')
                                        {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                    @enderror
            
    
                                    <a class="latest-message-list col-md-6">
                                        <div class="border-bottom mt-3 position-relative">
                                            <div class="float-left user mr-3">
                                                <h5 class="bg-danger text-center rounded-circle text-white mt-0">EA</h5>
                                            </div>
                                           
                                            <div class="massage-desc">
                                                <h5 class="font-14 mt-0 text-dark">Email Address</h5>
                                                <input class="form-control" type="email"  id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" style="border:none">
                                            </div>
                                        </div>
                                    </a>
                                    @error('email')
                                        {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                    @enderror

                                </div>

                                <a class="latest-message-list">
                                    <div class="border-bottom mt-3 position-relative">
                                        <div class="float-left user mr-3">
                                            <h5 class="bg-success text-center rounded-circle text-white mt-0">AD</h5>
                                        </div>
                                       
                                        <div class="massage-desc">
                                            <h5 class="font-14 mt-0 text-dark">Address</h5>
                                            <input class="form-control" type="text" id="address" placeholder="Address" name="address" value="{{ old('address') }}" style="border:none">
                                        </div>
                                    </div>
                                </a>
                                @error('address')
                                    {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                @enderror
        
                               
        
                            </div>

                        </div>

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Update Profile</button>
                            </div>
                        </div>

                    </form>
                </div>
               
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
