@extends('merchant.layouts.app')

@section('content')
<div class="page-content">
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
                <a href="{{route('orders')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div id="invoice">
                <div class="toolbar hidden-print">
                    <div class="text-right">
                        <button type="button" class="btn btn-dark"><i class="fa fa-print"></i> Print</button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
                    </div>
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
                                    {{Auth::user()->userDetail->company_name}}
                                </a>
                            </h2>
                                    <div>{{Auth::user()->userDetail->address}}</div>
                                    <div>{{Auth::user()->userDetail->phone_number}}</div>
                                    <div>{{Auth::user()->email}}</div>
                                </div>
                            </div>
                        </header>
                        <main>
                            <div class="row contacts">
                                <div class="col invoice-to">
                                    <div class="text-gray-light">INVOICE TO:</div>
                                    <h2 class="to">{{$getOrder->userDetails->company_name}}</h2>
                                    <div class="address">{{$getOrder->userDetails->address}}</div>
                                    <div class="email"><a href="mailto:john@example.com">{{$getOrder->users->email}}</a>
                                    </div>
                                </div>
                                <div class="col invoice-details">
                                    <h1 class="invoice-id">INVOICE #{{$getOrder->id}}</h1>
                                    <div class="date">Date of Invoice: {{$getOrder->created_at->format('d F Y')}}</div>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $subtotal = 0;
                                    @endphp

                                    @foreach ($getOrder->orderDetails as $item)
                                        @php
                                            $totalPrice = $item->menus->price * $item->quantity;
                                            $subtotal += $totalPrice;
                                        @endphp

                                        <tr>
                                            <td class="no">{{$loop->iteration}}</td>
                                            <td class="text-left">
                                                <h3>{{$item->menus->title}}</h3>
                                            </td>
                                            <td class="unit">{{$item->quantity}}</td>
                                            <td class="qty">@currency($item->menus->price)</td>
                                            <td class="total">@currency($totalPrice)</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SUBTOTAL</td>
                                        <td>@currency($subtotal)</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="mt-5">
                                <h3 class="">Thank you!</h3>
                                <div class="notices">
                                    <div>STATUS:</div>
                                    <div class="notice"><b>{{$getOrder->status}}</b>, Menu will deliver at {{$getOrder->delivery_at}}.</div>
                                </div>
                            </div>
                        </main>
                        <footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
