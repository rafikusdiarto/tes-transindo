@extends('customer.layouts.app')

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
        <div class="breadcrumb-title pr-3">Orders</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('customer')}}"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">My Orders</li>
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

    <div class="card radius-15">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">My Orders</h5>
                <p class="mb-0 ml-auto"><i class="bx bx-dots-horizontal-rounded float-right font-24"></i>
                </p>
            </div>
            <hr>
            @foreach ($getOrder as $item)
                <div class="media align-items-center mt-3">
                    @if ($item->userDetails->logo)
                        <img src="{{asset($item->userDetails->logo)}}" class="rounded-circle" width="45" height="45" alt="" />
                    @else
                        <img src="https://via.placeholder.com/110x110" width="45" height="45" class="rounded-circle" alt="">
                    @endif
                    <div class="media-body d-flex align-items-center col-9 justify-content-between mx-3">
                        <div>
                            <p class="font-weight-bold mb-0">{{$item->userDetails->company_name}}</p>
                            <p class="text-secondary mb-0">{{$item->userDetails->address}}</p>
                        </div>
                        {{-- <div class="d-flex align-items-center">
                            <span class="font-weight-bold mb-0 btn btn-sm btn-light-info">{{$item->menus->title}}</span>
                            <p class="text-secondary mb-0 ml-2"> : {{$item->quantity}} Pcs</p>
                        </div> --}}
                        <div class="d-flex align-items-center">
                            <span class="font-weight-bold mb-0 btn btn-sm {{
                                $item->status == 'PENDING' ? 'btn-light-info' :
                                ($item->status == 'DELIVERED' ? 'btn-light-success' :
                                ($item->status == 'CANCELED' ? 'btn-light-danger' : 'btn-light-info'))
                            }}">{{$item->status}}</span>
                        </div>
                        <div>
                            <span style="" class="btn btn-sm btn-light-success">Request Deliver : {{Carbon\Carbon::parse($item->delivery_at)->format('d F Y')}}</span>
                            {{-- <p class="font-weight-bold mb-0">Neil Wagner</p> --}}
                        </div>
                    </div>
                    <a href="{{route('orderDetailCustomer', $item->id)}}" class="btn btn-sm btn-info ml-2 text-white">
                        <i class="bx bx-detail"></i>
                    </a>
                </div>
            @endforeach
            <hr>
        </div>
        <div class="modal fade" id="changeStatusModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Order Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="mb-4">Choose an action to update the order status:</p>
                        <button type="button" class="btn btn-success mx-2" data-status="DELIVERED">Accept</button>
                        <button type="button" class="btn btn-danger mx-2" data-status="CANCELED">Reject</button>
                        <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
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
<script>
    $(document).ready(function() {
        var id;
        $('.edit').on('click', function() {
            id = $(this).data('id');
            $('#changeStatusModal').modal('show');
        });

        $('#changeStatusModal .btn-success, #changeStatusModal .btn-danger').on('click', function() {
            var newStatus = $(this).data('status');
            console.log(newStatus);
            console.log(id);

            $.ajax({
                url: `{{ route('changeStatusOrder', ['id' => ':id']) }}`.replace(':id', id),
                method: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: newStatus
                },
                success: function(response) {
                    if (response.success) {
                        $('#changeStatusModal').modal('hide');
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
