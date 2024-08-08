@extends('customer.layouts.app')

@section('content')
<div class="page-content">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">{{session('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    @if (\Auth::user()->userDetail->company_name == '')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">Your detail profile is empty, please fill detail profile !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <!--breadcrumb-->
    <div class="page-breadcrumb d-md-flex d-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Customer Profile</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('customer')}}"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Customer Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="user-profile-page">
        <div class="card radius-15">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-7 border-right">
                        <div class="d-md-flex align-items-center">
                            <div class="mb-md-0 mb-3">
                                @if ($getUser->userDetail->logo)
                                    <img src="{{asset($getUser->userDetail->logo)}}" class="rounded-circle shadow" width="130" height="130" alt="" />
                                @else
                                    <img src="https://via.placeholder.com/110x110" class="rounded-circle shadow" width="130" height="130" alt="" />
                                @endif
                            </div>
                            <div class="ml-md-4 flex-grow-1">
                                <div class="row justify-content-between align-items-center mb-1">
                                    <div class="col">
                                        <h4 class="mb-0">{{$getUser->email}}</h4>
                                    </div>
                                    {{-- <div class="col my-2">
                                        <div class="custom-control custom-switch">
                                            <form action="{{ route('changeStatus', $getUser->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="status" value="{{ $getUser->userDetail->status == 'AVAILABLE' ? 'NOT AVAILABLE' : 'AVAILABLE' }}">
                                                <input type="checkbox" class="custom-control-input" id="ColorLessIcons" onchange="this.form.submit()" {{ $getUser->userDetail->status == 'AVAILABLE' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="ColorLessIcons">Change Availability</label>
                                            </form>
                                        </div>
                                    </div> --}}
                                </div>
                                    {{-- <div class="custom-control custom-switch">
                                        <form id="statusForm" action="{{ route('changeStatus', $getUser->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <!-- Hidden input to hold the status value -->
                                            <input type="hidden" name="status" value="{{ $getUser->userDetail->status == 'AVAILABLE' ? 'NOT AVAILABLE' : 'AVAILABLE' }}">

                                            <!-- Switch input -->
                                            <input type="checkbox" class="custom-control-input" id="ColorLessIcons{{ $getUser->id }}"
                                                   {{ $getUser->userDetail->status == 'AVAILABLE' ? 'checked' : '' }}
                                                   data-toggle="modal" data-target="#exampleModal4">

                                            <label class="custom-control-label" for="ColorLessIcons{{ $getUser->id }}">Change Availability</label>
                                        </form>
                                    </div>
                                    <!-- Modal for confirmation -->
                                    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Change Availability</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to change the availability status?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <!-- Submit button for form submission -->
                                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('statusForm').submit();">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                <p class="text-primary"><i class='bx bx-buildings'></i> {{$getUser->userDetail->company_name ?? 'Company name not yet added'}}</p>
                                <p class="text-muted">{{Auth::user()->getRoleNames()->first()}}</p>
                                <a data-toggle="tab" href="#Edit-Profile" id="edit-profile-button">
                                    <button type="button" class="btn btn-outline-primary">Edit Profile</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 my-auto">
                        <table class="table table-sm d-flex table-borderless mt-md-0 mt-3">
                            <tbody>
                                <tr>
                                    <th>Availability : </th>
                                    <td>
                                        <span style="padding:6px" class="badge {{ $getUser->userDetail->status == 'AVAILABLE' ? 'badge-success' : 'badge-danger' }}">
                                            {{ $getUser->userDetail->status == 'AVAILABLE' ? 'Available' : 'Not Available' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Location : </th>
                                    <td>{{$getUser->userDetail->address ?? 'Location not yet added'}}</td>
                                </tr>
                                <tr>
                                    <th>Joined : </th>
                                    <td>{{$getUser->created_at->format('d F Y')}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            {{$getUser->userDetail->description}}
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <div class="mb-3 mb-lg-0"> <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-github'></i></a>
                            <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-twitter'></i></a>
                            <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-facebook'></i></a>
                            <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-linkedin'></i></a>
                            <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-dribbble'></i></a>
                            <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-stack-overflow'></i></a>
                        </div> --}}
                    </div>
                </div>
                <!--end row-->
                <ul class="nav nav-pills mt-3" style="display: none">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#Edit-Profile">
                            <span class="p-tab-name">Edit Profile</span>
                            <i class='bx bx-message-edit font-24 d-sm-none'></i>
                        </a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <div class="tab-pane fade" id="Edit-Profile">
                        <div class="col-12">
							<div class="card border-lg-top-danger ">
								<div class="card-body">
									<hr/>
                                    <form action="{{route('updateProfileCustomer', $getUser->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" value="{{$getUser->id}}" name="user_id" class="form-control border-left-0" placeholder="Company Name">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-home'></i></span>
                                                            </div>
                                                            <input type="text" name="company_name" value="{{$getUser->userDetail->company_name}}" class="form-control border-left-0" placeholder="Company Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-map'></i></span>
                                                            </div>
                                                            <input type="text" name="address" value="{{$getUser->userDetail->address}}" class="form-control border-left-0" placeholder="Company Address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-phone'></i></span>
                                                            </div>
                                                            <input type="text" name="phone_number" value="{{$getUser->userDetail->phone_number}}" class="form-control border-left-0" placeholder="Company Address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        @if ($getUser->userDetail->logo)
                                                        <div class="my-2">
                                                            <p>Old Logo</p>
                                                            <a href="javascript:;">
                                                                <img src="{{asset($getUser->userDetail->logo)}}" width="70" height="70" class="rounded shadow" alt="" />
                                                            </a>
                                                        </div>
                                                        @endif
                                                        <label>Logo</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-layer'></i></span>
                                                            </div>
                                                            <input type="file" name="logo" class="form-control border-left-0" placeholder="Upload Logo">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea class="form-control" name="description" placeholder="Enter Address" rows="3" cols="3">{{$getUser->userDetail->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-envelope'></i></span>
                                                            </div>
                                                            <input type="text" readonly value="{{$getUser->email}}" class="form-control border-left-0" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-lock-open-alt'></i></span>
                                                            </div>
                                                            <input type="password" readonly value="{{$getUser->password}}" class="form-control border-left-0" placeholder="Confirm Password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-danger px-5">Update</button>
                                    </form>
								</div>

							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('edit-profile-button').addEventListener('click', function() {
        console.log('click')
        var navPills = document.querySelector('.nav.nav-pills');
        var tabContent = document.querySelector('.tab-content');

        if (navPills.style.display === 'none') {
            navPills.style.display = '';
            tabContent.style.display = 'block';
        } else if (navPills.style.display === '') {
            navPills.style.display = 'none';
            tabContent.style.display = 'none';
        }
    });
</script>
@endsection
