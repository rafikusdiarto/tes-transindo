@extends('merchant.layouts.app')

@section('content')
<div class="page-content">
    <div id="alert-container">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
    </div>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-md-flex d-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Menu</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('merchant')}}"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Menu</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <a href="{{route('menus')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <!--end row-->
    <div class="row">
        <div class="col-12">
            <div class="card border-lg-top-danger ">
                <div class="card-body">
                    <hr/>
                    <form action="{{route('storeMenu')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label>Menu Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-file'></i></span>
                                    </div>
                                    <input type="text" name="title" class="form-control border-left-0" placeholder="Menu Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Menu Category</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-detail'></i></span>
                                    </div>
                                    <select name="menu_category_id" class="form-control border-left-0" placeholder="Menu Category">
                                        @foreach ($getMenuCategories as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-dollar'></i></span>
                                    </div>
                                    <input type="number" name="price" class="form-control border-left-0" placeholder="Price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Stock</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-coin-stack'></i></span>
                                    </div>
                                    <input type="number" name="stock" class="form-control border-left-0" placeholder="Stock Available">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-layer'></i></span>
                                    </div>
                                    <input type="file" name="img" class="form-control border-left-0" placeholder="Upload Logo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter Address" rows="3" cols="3">
                                </textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger px-5">Submit</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
    <!--end row-->
</div>
@endsection
