@extends('layouts.app-admin')

@section('content')

<div class="app-inner-layout__wrapper">
    <div class="app-inner-layout__content">
        <div class="tab-content">

            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon pe-7s-settings mr-3 text-muted opacity-6"> </i>
                                        Profile Settings                              
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body">

                                    @php
                                        $user = Auth::user();

                                        $image = $user->profile_photo_path;
                                        $photo_path = $image ? asset('storage/' . $image) : asset('assets/assets/images/avatar.png');
                                    @endphp

                                    <form id="RegisterValidation" method="POST" action="{{ route('admin.edit-profile.update', ['update' => $user->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH') 

                                    <div class="card-shadow-primary profile-responsive card-border mb-3 card">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-dark">
                                                <div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract1.jpg')"></div>
                                                <div class="menu-header-content btn-pane-right">
                                                    <div class="avatar-icon-wrapper mr-2 avatar-icon-xl">
                                                        <div class="avatar-icon">
                                                            <img src="{{ $photo_path }}" alt="Avatar">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h5 class="menu-header-title">
                                                            {{ $user->firstname ." ". $user->lastname }}
                                                        </h5>
                                                        <h6 class="menu-header-subtitle">
                                                            {{ $user->admin_role ?? "N/A" }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <input class="form-control-file" name="photo" type="file" id="profile-photo" value="{{ old('photo',$user->photo) }}" />
                                        <x-input-error for="photo" class="mt-2" />
                                    </div>

                                    <x-validation-errors class="mb-4" />

                                    @if (session('status') === 'success')
                                        <x-success-msg>
                                            {{ __('Profile updated successfully.') }}
                                        </x-success-msg>
                                    @elseif (session('status') === 'failed')
                                        <x-failed-msg>
                                            {{ __('Something went wrong! Please try again.') }}
                                        </x-failed-msg>
                                    @endif

                                    <div class="card-body">

                                        <div class="form-group has-label">
                                            <label>
                                                Admin Role
                                            </label>
                                            <select class="form-control" name="admin_role">
                                                <option {{ (old('admin_role', $user->admin_role) == 'none') ? 'selected' : '' }} value="none">None</option>
                                                <option {{ (old('admin_role', $user->admin_role) == 'ceo') ? 'selected' : '' }} value="none" value="none">CEO</option>
                                                <option {{ (old('admin_role', $user->admin_role) == 'customer-support') ? 'selected' : '' }} value="customer-support">Customer Support</option>
                                                <option {{ (old('admin_role', $user->admin_role) == 'software-developer') ? 'selected' : '' }} value="software-developer">Software Developer</option>
                                                <option {{ (old('admin_role', $user->admin_role) == 'product-designer') ? 'selected' : '' }} value="product-designer">Product Designer</option>
                                                <option {{ (old('admin_role', $user->admin_role) == 'graphic-designer') ? 'selected' : '' }} value="graphic-designer">Graphic Designer</option>
                                                <option {{ (old('admin_role', $user->admin_role) == 'product-manager') ? 'selected' : '' }} value="product-manager">Product Manager</option>
                                                <option {{ (old('admin_role', $user->admin_role) == 'mobile-developer') ? 'selected' : '' }} value="mobile-developer">Mobile Developer</option>
                                                <option {{ (old('admin_role', $user->admin_role) == 'dev-ops') ? 'selected' : '' }} value="dev-ops" value="dev-ops">Dev Ops</option>
                                                <option {{ (old('admin_role', $user->admin_role) == 'database-management') ? 'selected' : '' }} value="database-management">Database Management</option>
                                                <option {{ (old('admin_role', $user->admin_role) == 'cyber-security') ? 'selected' : '' }} value="cyber-security">Cyber Security</option>
                                            </select>
                                            <x-input-error for="admin_role" class="mt-2" />
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                Firstname <star class="star">*</star>
                                            </label>
                                            <input class="form-control" name="firstname" type="text" value="{{ old('firstname',$user->firstname) }}" required />
                                            <x-input-error for="firstname" class="mt-2" />
                                        </div>
                                                            
                                        <div class="form-group">
                                            <label>
                                                Lastname <star class="star">*</star>
                                            </label>
                                            <input class="form-control" name="lastname" type="text" value="{{ old('lastname',$user->lastname) }}" required />
                                            <x-input-error for="lastname" class="mt-2" />
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                Email <star class="star">*</star>
                                            </label>
                                            <input class="form-control" name="email" type="text" value="{{ old('email',$user->email) }}" required />
                                            <x-input-error for="email" class="mt-2" />
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                Phone
                                            </label>
                                            <input class="form-control" name="phone" type="text" value="{{ old('phone',$user->phone) }}" required />
                                            <x-input-error for="phone" class="mt-2" />
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                Gender
                                            </label>
                                            <div class="col-lg-8">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" value="Male" {{ old('gender',$user->gender) == 'Male' ? 'checked' : '' }} /> Male
                                                    </label> 
                                                    &nbsp;&nbsp;&nbsp;
                                                    <label>
                                                        <input type="radio" name="gender" value="Female" {{ old('gender',$user->gender) == 'Female' ? 'checked' : '' }} /> Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>
                                                Biography
                                            </label>
                                            <textarea class="form-control" name="biography">{{ old('biography',$user->biography) }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                DoB
                                            </label>
                                            <input class="form-control" name="d_o_b" type="date" value="{{ old('phone',$user->d_o_b) }}" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" />
                                            <x-input-error for="d_o_b" class="mt-2" />
                                        </div>
                                    
                                        <div class="clearfix"></div>

                                        <div class="card-category form-category">
                                            <star class="star">*</star> Required fields
                                        </div>

                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer" align="center">
                                            <input type="submit" class="mb-2 mr-2 btn-hover-shine btn btn-shadow btn-focus btn-block" value="UPDATE">
                                            <div class="clearfix"></div>
                                        </div>

                                    </form>
                                
                                </div>
                            </div>
                            <!-- /.mini-card mb3 card -->
                        </div>
                        <!--/.col (left) -->
        
                    </div>
                    <!-- /.row -->
                </div>
            </div>


        </div>
    </div>

</div>

@endsection