@extends('merchant.layouts.app')

@section('content')
<div class="page-content">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('succcess')}}
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
    @if (\Auth::user()->userDetail->status == 'NOT AVAILABLE')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Merchant not yet open, please open your merchant
            <a href="{{route('editProfile', \Auth::user()->id)}}" class="alert-link">here</a> !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    @if (\Auth::user()->userDetail->company_name == '')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">Your detail profile is empty, please fill detail profile !
            <a href="{{route('editProfile', \Auth::user()->id)}}" class="alert-link">here</a> !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="card radius-15">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <div>
                            <p class="mb-0 font-weight-bold">Sessions</p>
                            <h2 class="mb-0">501</h2>
                        </div>
                        <div class="ml-auto align-self-end">
                            <p class="mb-0 font-14 text-primary"><i class='bx bxs-up-arrow-circle'></i>  <span>1.01% 31 days ago</span>
                            </p>
                        </div>
                    </div>
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card radius-15">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <div>
                            <p class="mb-0 font-weight-bold">Visitors</p>
                            <h2 class="mb-0">409</h2>
                        </div>
                        <div class="ml-auto align-self-end">
                            <p class="mb-0 font-14 text-success"><i class='bx bxs-up-arrow-circle'></i>  <span>0.49% 31 days ago</span>
                            </p>
                        </div>
                    </div>
                    <div id="chart2"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card radius-15">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <div>
                            <p class="mb-0 font-weight-bold">Page Views</p>
                            <h2 class="mb-0">2,346</h2>
                        </div>
                        <div class="ml-auto align-self-end">
                            <p class="mb-0 font-14 text-danger"><i class='bx bxs-down-arrow-circle'></i>  <span>130.68% 31 days ago</span>
                            </p>
                        </div>
                    </div>
                    <div id="chart3"></div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card radius-15">
                <div class="card-header border-bottom-0">
                    <div class="d-lg-flex align-items-center">
                        <div>
                            <h5 class="mb-lg-0">New VS Returning Visitors</h5>
                        </div>
                        <div class="ml-lg-auto mb-2 mb-lg-0">
                            <div class="btn-group-round">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-white">This Month</button>
                                    <div class="dropdown-menu">	<a class="dropdown-item" href="javaScript:;">This Week</a>
                                        <a class="dropdown-item" href="javaScript:;">This Year</a>
                                    </div>
                                    <button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart4"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card radius-15">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center">
                        <div>
                            <h5 class="mb-4">Devices of Visitors</h5>
                        </div>
                    </div>
                    <div id="chart5"></div>
                </div>
                <ul class="list-group list-group-flush mb-0">
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Mobile<span class="badge badge-danger badge-pill">25%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Desktop<span class="badge badge-primary badge-pill">65%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Tablet<span class="badge badge-warning badge-pill">10%</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end row-->
    <div class="row">
        <div class="col-12 col-lg-12 col-xl-6">
            <div class="card-deck flex-column flex-lg-row">
                <div class="card radius-15 bg-info">
                    <div class="card-body text-center">
                        <div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-time'></i>
                        </div>
                        <h4 class="mb-0 font-weight-bold mt-3 text-white">2m 28s</h4>
                        <p class="mb-0 text-white">Avg. Time on Site</p>
                    </div>
                </div>
                <div class="card radius-15 bg-wall">
                    <div class="card-body text-center">
                        <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-bookmark-alt'></i>
                        </div>
                        <h4 class="mb-0 font-weight-bold mt-3 text-white">4.68</h4>
                        <p class="mb-0 text-white">Pages/Session</p>
                    </div>
                </div>
                <div class="card radius-15 bg-rose">
                    <div class="card-body text-center">
                        <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-bulb'></i>
                        </div>
                        <h4 class="mb-0 font-weight-bold mt-3 text-white">78%</h4>
                        <p class="mb-0 text-white">New Sessions</p>
                    </div>
                </div>
            </div>
            <div class="card-deck flex-column flex-lg-row">
                <div class="card radius-15 bg-danger">
                    <div class="card-body text-center">
                        <div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-line-chart'></i>
                        </div>
                        <h4 class="mb-0 font-weight-bold mt-3 text-white">23.4%</h4>
                        <p class="mb-0 text-white">Bounce Rate</p>
                    </div>
                </div>
                <div class="card radius-15 bg-primary">
                    <div class="card-body text-center">
                        <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-group'></i>
                        </div>
                        <h4 class="mb-0 font-weight-bold mt-3 text-white">4,286</h4>
                        <p class="mb-0 text-white">New Users</p>
                    </div>
                </div>
                <div class="card radius-15 bg-success">
                    <div class="card-body text-center">
                        <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-cloud-download'></i>
                        </div>
                        <h4 class="mb-0 font-weight-bold mt-3 text-white">78%</h4>
                        <p class="mb-0 text-white">Downloads</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-6">
            <div class="card radius-15">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center mb-4">
                        <div>
                            <h5 class="mb-0">Social Media Traffic</h5>
                        </div>
                        <div class="ml-auto">
                            <h3 class="mb-0"><span class="font-14">Total Visits:</span> 874</h3>
                        </div>
                    </div>
                    <hr/>
                    <div class="dashboard-social-list">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center">
                                <div class="media align-items-center">
                                    <div class="widgets-social bg-youtube rounded-circle text-white"><i class='bx bxl-youtube'></i>
                                    </div>
                                    <div class="media-body ml-2">
                                        <h6 class="mb-0">YouTube</h6>
                                    </div>
                                </div>
                                <div class="ml-auto">298</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="media align-items-center">
                                    <div class="widgets-social bg-facebook rounded-circle text-white"><i class='bx bxl-facebook'></i>
                                    </div>
                                    <div class="media-body ml-2">
                                        <h6 class="mb-0">Facebook</h6>
                                    </div>
                                </div>
                                <div class="ml-auto">324</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="media align-items-center">
                                    <div class="widgets-social bg-linkedin rounded-circle text-white"><i class='bx bxl-linkedin'></i>
                                    </div>
                                    <div class="media-body ml-2">
                                        <h6 class="mb-0">Linkedin</h6>
                                    </div>
                                </div>
                                <div class="ml-auto">127</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="media align-items-center">
                                    <div class="widgets-social bg-twitter rounded-circle text-white"><i class='bx bxl-twitter'></i>
                                    </div>
                                    <div class="media-body ml-2">
                                        <h6 class="mb-0">Twitter</h6>
                                    </div>
                                </div>
                                <div class="ml-auto">325</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="media align-items-center">
                                    <div class="widgets-social bg-tumblr rounded-circle text-white"><i class='bx bxl-tumblr'></i>
                                    </div>
                                    <div class="media-body ml-2">
                                        <h6 class="mb-0">Tumblr</h6>
                                    </div>
                                </div>
                                <div class="ml-auto">287</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="media align-items-center">
                                    <div class="widgets-social bg-dribbble rounded-circle text-white"><i class='bx bxl-dribbble'></i>
                                    </div>
                                    <div class="media-body ml-2">
                                        <h6 class="mb-0">Dribbble</h6>
                                    </div>
                                </div>
                                <div class="ml-auto">154</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
    <!--end row-->
    <div class="card-deck flex-column flex-lg-row">
        <div class="card radius-15">
            <div class="card-body">
                <div class="card-title">
                    <h5 class="mb-0">Browsers Statistics </h5>
                </div>
                <hr/>
                <div class="media align-items-center">
                    <div>
                        <img src="{{asset('assets-merchant/images/icons/chrome.png')}}" width="35" height="35" alt="" />
                    </div>
                    <div class="media-body ml-3">
                        <h6 class="mb-0">587</h6>
                        <p class="mb-0">Chrome</p>
                    </div>
                    <p class="mb-0">24.3%</p>
                </div>
                <hr/>
                <div class="media align-items-center">
                    <div>
                        <img src="{{asset('assets-merchant/images/icons/firefox.png')}}" width="35" height="35" alt="" />
                    </div>
                    <div class="media-body ml-3">
                        <h6 class="mb-0">358</h6>
                        <p class="mb-0">Firefox</p>
                    </div>
                    <p class="mb-0">12.3%</p>
                </div>
                <hr/>
                <div class="media align-items-center">
                    <div>
                        <img src="{{asset('assets-merchant/images/icons/edge.png')}}" width="35" height="35" alt="" />
                    </div>
                    <div class="media-body ml-3">
                        <h6 class="mb-0">867</h6>
                        <p class="mb-0">Edge</p>
                    </div>
                    <p class="mb-0">24.3%</p>
                </div>
                <hr/>
                <div class="media align-items-center">
                    <div>
                        <img src="{{asset('assets-merchant/images/icons/opera.png')}}" width="35" height="35" alt="" />
                    </div>
                    <div class="media-body ml-3">
                        <h6 class="mb-0">752</h6>
                        <p class="mb-0">Opera</p>
                    </div>
                    <p class="mb-0">27.3%</p>
                </div>
                <hr/>
                <div class="media align-items-center">
                    <div>
                        <img src="{{asset('assets-merchant/images/icons/safari.png')}}" width="35" height="35" alt="" />
                    </div>
                    <div class="media-body ml-3">
                        <h6 class="mb-0">586</h6>
                        <p class="mb-0">Safari</p>
                    </div>
                    <p class="mb-0">14.5%</p>
                </div>
            </div>
        </div>
        <div class="card radius-15">
            <div class="card-body">
                <div class="card-title">
                    <h5 class="mb-0">Traffic Sources </h5>
                </div>
                <hr/>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Source</th>
                                <th>Visitors</th>
                                <th>Bounce Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>(direct)</td>
                                <td>56</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>google</td>
                                <td>29</td>
                                <td>12%</td>
                            </tr>
                            <tr>
                                <td>linkedin.com</td>
                                <td>68</td>
                                <td>33%</td>
                            </tr>
                            <tr>
                                <td>bing</td>
                                <td>14</td>
                                <td>24%</td>
                            </tr>
                            <tr>
                                <td>facebook.com</td>
                                <td>87</td>
                                <td>22%</td>
                            </tr>
                            <tr>
                                <td>other</td>
                                <td>98</td>
                                <td>27%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card radius-15">
            <div class="card-body">
                <div class="card-title">
                    <h5 class="mb-0">Visitors By Gender </h5>
                </div>
                <hr/>
                <div id="chart6"></div>
            </div>
        </div>
    </div>
</div>
@endsection
