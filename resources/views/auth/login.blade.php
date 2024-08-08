<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Login</title>
	<!--favicon-->
	<link rel="icon" href="{{asset('assets-merchant/images/transindo.png')}}" type="image/png" />
	<!-- loader-->
	<link href="{{asset('assets-merchant/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('assets-merchant/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets-merchant/css/bootstrap.min.css')}}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{asset('assets-merchant/css/icons.css')}}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{asset('assets-merchant/css/app.css')}}" />
</head>

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="{{asset('assets-merchant/images/transindo.png')}}" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Welcome Back</h3>
									</div>
									{{-- <div class="input-group shadow-sm rounded mt-5">
										<div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="{{asset('assets-merchant/images/icons/search.svg')}}" alt="" width="16"></span>
										</div>
										<input type="button" class="form-control  border-0" value="Log in with google">
									</div>
									<div class="login-separater text-center"> <span>OR LOGIN WITH EMAIL</span>
										<hr/>
									</div> --}}
                                    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
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
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group mt-4">
                                            <label>Email Address</label>
                                            <input type="text" name="email" class="form-control" placeholder="Enter your email address" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Enter your password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        {{-- <div class="form-row">
                                            <div class="form-group col">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                                    <label class="custom-control-label" for="customSwitch1">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="form-group col text-right"> <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Forget Password?</a>
                                            </div>
                                        </div> --}}
                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                                            {{-- <button type="submit" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
                                            </button> --}}
                                        </div>
                                    </form>
									<hr>
									<div class="text-center">
										<p class="mb-0">Don't have an account? <a href="{{route('register')}}">Sign up</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="{{asset('assets-merchant/images/login-images/login-frent-img.jpg')}}" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>
