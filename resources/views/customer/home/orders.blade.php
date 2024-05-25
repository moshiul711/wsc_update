@extends('customer.master')

@section('main-content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Orders</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('customer') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Order Number</th>
                                <th class="wd-15p border-bottom-0">Total</th>
                                <th class="wd-15p border-bottom-0">Date</th>
                                <th class="wd-20p border-bottom-0">Status</th>
                                <th class="wd-20p border-bottom-0">Amount</th>
                                <th class="wd-20p border-bottom-0">Method</th>
                                <th class="wd-20p border-bottom-0">Status</th>
                                <th class="wd-20p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->order_number }}</td>
                                    <td>{{ $order->order_total }}</td>
                                    <td>{{ $order->order_date }}</td>
                                    <td>
                                        @if($order->order_status=='pending')
                                            <button class="btn btn-info-gradient">Pending</button>
                                        @elseif($order->order_status=='processing')
                                            <button class="btn btn-primary-gradient">Processing</button>
                                        @elseif($order->order_status=='complete')
                                            <button class="btn btn-success-gradient">Complete</button>
                                        @else
                                            <button class="btn btn-danger-gradient">Cancel</button>
                                        @endif
                                    </td>
                                    <td>{{ $order->payment_amount }}</td>
                                    <td>
                                        @if($order->payment_method=='cod')
                                        {{ 'Cash On Delivery' }}
                                        @else
                                        {{ 'Online Payment' }}
                                            @endif
                                    </td>
                                    <td>{{ $order->payment_status }}</td>
                                    <td>
                                        <a href="{{ route('customer.order.detail', $order->order_number ) }}" class="btn btn-success-gradient">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END-->
@endsection