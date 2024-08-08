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
                            <p class="mb-0 font-weight-bold">Menu Sales</p>
                            <h2 class="mb-0">{{$totalMenuSales ?? 0}}</h2>
                        </div>
                        <div class="ml-auto align-self-end">
                            <p class="mb-0 font-14 text-primary"><i class='bx bxs-up-arrow-circle'></i>  <span>{{$totalMenuSales ?? 0 }} Successfully</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card radius-15">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <div>
                            <p class="mb-0 font-weight-bold">Total Income</p>
                            <h2 class="mb-0">@currency($totalIncome ?? 0)</h2>
                        </div>
                        <div class="ml-auto align-self-end">
                            <p class="mb-0 font-14 text-success"><i class='bx bxs-up-arrow-circle'></i>  <span>{{$totalIncome ?? 0 }} Successfully</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card radius-15">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <div>
                            <p class="mb-0 font-weight-bold">Total Orders</p>
                            <h2 class="mb-0">{{$totalOrders ?? 0}}</h2>
                        </div>
                        <div class="ml-auto align-self-end">
                            <p class="mb-0 font-14 text-success"><i class='bx bxs-up-arrow-circle'></i>  <span>{{$totalOrders ?? 0 }} Successfully</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    <!--end row-->
    <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
            <div class="card-deck flex-column flex-lg-row">
                @foreach ($salesPerCategory as $item)
                    <div class="card radius-15 bg-wall">
                        <div class="card-body text-center">
                            <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-bookmark-alt'></i>
                            </div>
                            <h4 class="mb-0 font-weight-bold mt-3 text-white">Total Sold : {{$item->total_sold ?? 0}}</h4>
                            <p class="mb-0 text-white">{{$item->category_name ?? ''}}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


</div>
@endsection
