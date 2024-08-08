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
        <div class="breadcrumb-title pr-3">Menu</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('merchant')}}"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Menus</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <a href="{{route('addMenu')}}" class="btn btn-primary">Add Menu</a>
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
                                <span style="padding:6px" class="badge badge-success">
                                    {{$item->menucategories->name}}
                                </span>
                                <span style="padding:6px" class="badge badge-info">
                                    @currency($item->price)
                                </span>
                                <div class="mt-2">
                                    <p class="mb-0 text-secondary">Available : {{$item->stock}}</p>
                                    <p class="mb-0 text-secondary">{{$item->description}}</p>
                                </div>
                                <div class="d-flex justify-content-end mt-2">
                                    <a href="{{route('editMenu', $item->id)}}" class="btn btn-warning m-1 text-white">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    <form action="{{route('destroyMenu', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1 text-white">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </div>
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
