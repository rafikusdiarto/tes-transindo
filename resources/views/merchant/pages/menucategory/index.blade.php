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
                    <li class="breadcrumb-item active" aria-current="page">Menu Categories</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto border">
            <div class="btn-group">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Data</button>
            </div>
        </div>
    </div>
    <hr>

    <div class="card radius-15">
        <div class="card-body">
            <div class="card-title">
                <h4 class="mb-0">Menu Categories</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getMenuCategories as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->name}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-warning text-white m-1 px-3 edit"
                                            data-id="{{ $item->id }}" data-name="{{ $item->name }}">
                                            <i class='bx bx-edit mr-1'></i>Edit
                                        </button>
                                        <form action="{{route('menuCategoriesDestroy', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger m-1 px-3"><i class='bx bx-trash mr-1'></i>Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- add modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="menuCategoryForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label>Category Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-home'></i></span>
                                    </div>
                                    <input type="text" name="name" class="form-control border-left-0" placeholder="Category Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- edit modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="menuCategoryEdit" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label>Category Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-home'></i></span>
                                    </div>
                                    <input type="text" name="name" class="form-control border-left-0" placeholder="Category Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        if (sessionStorage.getItem('error')) {
            var errorMessage = sessionStorage.getItem('error');

            var alertHtml = `
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    ${errorMessage}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            `;
            $('#alert-container').html(alertHtml);
            sessionStorage.removeItem('error');
        }
    });
</script>

{{-- submit data --}}
<script>
    $(document).ready(function() {
        $('#menuCategoryForm').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('menuCategoriesStore') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    } else {
                        sessionStorage.setItem('error', response.message);
                        location.reload();
                    }
                },
                error: function(xhr) {
                    var errorMessage = 'An error occurred: ' + xhr.responseText;
                    sessionStorage.setItem('error', errorMessage);
                    location.reload();
                }
            });
        });
    });
</script>

{{-- edit data --}}
<script>
$(document).ready(function() {
    $('.edit').on('click', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');

        $('#menuCategoryEdit [name="name"]').val(name);
        $('#menuCategoryEdit').data('id', id);

        $('#editModal').modal('show');
    });

    $('#menuCategoryEdit').on('submit', function(e) {
        e.preventDefault();

        var id = $(this).data('id');
        var formData = new FormData(this);

        // formData.append('_token', $('input[name="_token"]').val());
        formData.append('_method', 'PUT');
        $.ajax({
            url: `{{ route('menuCategoriesUpdate', ['id' => ':id']) }}`.replace(':id', id),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    $('#editModal').modal('hide');
                    location.reload();
                } else {
                    sessionStorage.setItem('error', response.message);
                    location.reload();
                }
            },
            error: function(xhr) {
                var errorMessage = 'An error occurred: ' + xhr.responseText;
                sessionStorage.setItem('error', errorMessage);
                location.reload();
            }
        });
    });
});
</script>


@endsection
