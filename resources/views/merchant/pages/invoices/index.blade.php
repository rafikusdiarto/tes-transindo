@extends('merchant.layouts.app')

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
    @if (\Auth::user()->userDetail->status == 'NOT AVAILABLE')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Merchant not yet open, please open your merchant
            <a href="{{route('editProfile', \Auth::user()->id)}}" class="alert-link">here</a> !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <!--breadcrumb-->
    <div class="page-breadcrumb d-md-flex d-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Invoices</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('merchant')}}"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Invoice</li>
                </ol>
            </nav>
        </div>
        {{-- <div class="ml-auto">
            <div class="btn-group">
                <a href="{{route('addMenu')}}" class="btn btn-primary">Add Menu</a>
            </div>
        </div> --}}
    </div>
    <hr>

    <!--end row-->
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Recent Orders</h5>
                </div>
                <div class="ml-auto">
                    <button type="button" class="btn btn-white radius-15">View More</button>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Customer</th>
                            <th>Price X Quantity </th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="product-img bg-transparent border">
                                    <img src="{{asset('assets-merchant/images/icons/smartphone.png')}}" width="35" alt="">
                                </div>
                            </td>
                            <td>Honor Mobile 7x</td>
                            <td>Mitchell Daniel</td>
                            <td>$54.68 X 3</td>
                            <td class="text-center"><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-primary radius-30 px-3">
                                    <i class="bx bx-download"></i>
                                    Download
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
