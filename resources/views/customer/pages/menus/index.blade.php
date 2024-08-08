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
        <div class="breadcrumb-title pr-3">Menu</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('customer')}}"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Menus</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <a href="{{route('ordersCart')}}" class="btn btn-primary">
                    <i class="bx bx-basket"></i>
                    My Chart</a>
            </div>
        </div>
    </div>
    <hr>
    <!--end breadcrumb-->
    <!--end row-->
    <div class="row">
        @foreach ($getMenu as $item)
            <div class="col-lg-4">
                <div class="card radius-15 bg-light-info">
                    <div class="card-body" style="">
                        <div class="media align-items-center">
                            <img src="{{asset($item->img)}}" width="120" height="120" class="rounded-circle p-1 border bg-white" alt="" />
                            <div class="media-body ml-3">
                                <h5 class="mb-0 text-info">{{$item->title}}</h5>
                                <h6 class="mb-0 text-secondary">Menu by {{$item->merchants->company_name}}</h6>
                                <span style="padding:6px" class="badge badge-success">
                                    {{$item->menucategories->name}}
                                </span>
                                <span style="padding:6px" class="badge badge-info">
                                    @currency($item->price)
                                </span>
                                {{-- <span style="padding:6px" class="badge badge-success">
                                </span> --}}
                                <img src="{{asset($item->merchants->logo)}}" width="50" height="50" class="rounded-circle p-1 border bg-white" alt="" />
                                <div class="mt-2">
                                    <p class="mb-0 text-secondary">Available : {{$item->stock}}</p>
                                    <p class="mb-0 text-secondary">{{$item->description}}</p>
                                </div>
                                <form action="{{route('addToCart', $item->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group d-flex alignt-items-center justify-content-end mt-2">
                                        <input class="form-control form-control-sm" name="quantity" type="number" placeholder="Add quantity">
                                        <input class="form-control form-control-sm" name="customer_id" value="{{Auth::user()->id}}" type="hidden" placeholder="Add quantity">
                                        <input class="form-control form-control-sm" name="merchant_id" value="{{$item->merchants->id}}" type="hidden" placeholder="Add quantity">
                                        <input class="form-control form-control-sm" name="menu_id" value="{{$item->id}}" type="hidden" placeholder="Add quantity">
                                        <button type="submit" class="btn btn-sm btn-warning ml-2 text-white">
                                            <i class="bx bx-basket"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <!--end row-->
</div>
@endsection
