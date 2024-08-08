<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Register</title>
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

<body class="bg-register">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-register d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="{{asset('assets-merchant/images/transindo.png')}}" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Create an Account</h3>
									</div>
                                    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-4">
                                            <label>Email Address</label>
                                            <input type="text" name="email" class="form-control" placeholder="example@user.com" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input class="form-control border-right-0" type="password" name="password">
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                <div class="input-group-append">	<a href="javascript:;" class="input-group-text bg-transparent border-left-0"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Register As</label>
                                            <select name="role" class="form-control">
                                                <option value="MERCHANT">Merchant</option>
                                                <option value="CUSTOMER">Customer</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                                        </div>
                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                            </button>
                                        </div>
                                    </form>

									<hr/>
									<div class="text-center mt-4">
										<p class="mb-0">Already have an account? <a href="{{route('login')}}">Login</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="{{asset('assets-merchant/images/login-images/register-frent-img.jpg')}}" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('assets-merchant/js/jquery.min.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
</body>

</html>
