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
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Invoice</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <a href="{{route('menusCustomer')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div id="invoice">
                <div class="toolbar hidden-print">
                    <hr/>
                </div>
                <div class="invoice overflow-auto">
                    <div style="min-width: 600px">
                        <header>
                            <div class="row">
                                <div class="col">
                                    <a href="javascript:;">
                                        <img src="assets/images/logo-icon.png" width="80" alt="" />
                                    </a>
                                </div>
                                <div class="col company-details">
                                    <h2 class="name">
                                <a target="_blank" href="javascript:;">
                                    My Cart :
                                    {{Auth::user()->userDetail->company_name}}
                                </a>
                            </h2>
                                </div>
                            </div>
                        </header>
                        @if (count($getOrder) == 0)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">Thank you for order, your order is being process by merchant
                            </div>
                        @else
                            <main>
                                <div class="row contacts">
                                    <div class="col invoice-details">
                                    </div>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="text-left">MENU</th>
                                            <th class="text-right">QUANTITY</th>
                                            <th class="text-right">PRICE</th>
                                            <th class="text-right">TOTAL</th>
                                            <th class="text-center">MERCHANT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $grandTotal = 0;
                                        @endphp

                                        @foreach ($getOrder as $order)
                                            @php
                                                $subtotal = 0;
                                            @endphp

                                            @foreach ($order->orderDetails as $orderDetail)
                                                @php
                                                    $menu = $orderDetail->menus;
                                                    $totalPrice = $menu->price * $orderDetail->quantity;
                                                    $subtotal += $totalPrice;
                                                @endphp

                                                <tr>
                                                    <td class="no">{{ $loop->iteration }}</td>
                                                    <td class="text-left">
                                                        <h3>{{ $menu->title }}</h3>
                                                    </td>
                                                    <td class="unit">{{ $orderDetail->quantity }}</td>
                                                    <td class="qty">@currency($menu->price)</td>
                                                    <td class="total">@currency($totalPrice)</td>
                                                    <td class="text-center">
                                                        <img src="{{ asset($order->merchants->logo) }}" width="50" height="50" class="rounded-circle p-1 border bg-white" alt="" />
                                                    </td>
                                                </tr>
                                            @endforeach

                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Subtotal:</strong></td>
                                                <td class="total">@currency($subtotal)</td>
                                            </tr>

                                            @php
                                                $grandTotal += $subtotal;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" class="text-right"><strong>TOTAL:</strong></td>
                                            <td>@currency($grandTotal)</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="mt-5">
                                    <div class="notices">
                                        <div class="notice"> Please checkout to process in Merchant.</div>
                                    </div>
                                </div>
                                <form action="{{ route('ordersCheckout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="customer_id" value="{{Auth::user()->id}}"> <!-- Assuming you're using auth() for the current user -->
                                    <input type="hidden" name="order_ids" value="{{ implode(',', $getOrder->pluck('id')->toArray()) }}">
                                    <div class="form-group mt-3">
                                        <label>Delivery At</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bx-calendar'></i></span>
                                            </div>
                                            <input type="date" name="delivery_at" class="form-control border-left-0">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Checkout</button>
                                </form>
                            </main>
                        @endif
                        <footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
