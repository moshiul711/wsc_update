@extends('layouts.app')

@section('main-content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Order List(S)</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Order</th>
                                <th class="wd-15p border-bottom-0">Order Number</th>
                                <th class="wd-20p border-bottom-0">Date</th>
                                <th class="wd-15p border-bottom-0">Customer</th>
                                <th class="wd-20p border-bottom-0">Status</th>

                                <th class="wd-20p border-bottom-0">Payment</th>
                                <th class="wd-20p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>

                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->order_number }}</td>
                                    <td>{{ $order->order_date }}</td>
                                    <td>{{ $order->customer->first_name.'('. $order->customer->phone.')'}}</td>
                                    <td>
                                        @if($order->order_status=='pending')
                                            <button class="btn btn-info-gradient">Pending</button>
                                        @elseif($order->order_status=='processing')
                                            <button class="btn btn-info-gradient">Processing</button>
                                        @elseif($order->order_status=='complete')
                                            <button class="btn btn-success-gradient">Complete</button>
                                        @else
                                            <button class="btn btn-danger-gradient">Cancel</button>
                                        @endif
                                    </td>
                                    <td>
                                        @if($order->payment_method=='cod')
                                            {{ 'Cash On Delivery' }}
                                        @else
                                            {{ 'Online Payment' }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.order-detail', ['id' => $order->order_number])}}" class="btn btn-success btn-sm" title="Order Detail Info">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{route('admin.order-edit', ['id' => $order->order_number])}}" class="btn btn-info btn-sm {{$order->order_status == 'complete' ? 'disabled' : ''}}" title="Edit Order">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('admin.order-invoice', ['id' => $order->order_number])}}" target="_blank" class="btn btn-warning btn-sm" title="Order Invoice">
                                            <i class="fa fa-book"></i>
                                        </a>
                                        <a href="{{route('admin.order-download-order-invoice', ['id' => $order->order_number])}}" target="_blank" class="btn btn-primary btn-sm" title="Print Invoice">
                                            <i class="fa fa-print"></i>
                                        </a>
                                        <a href="{{route('admin.order-delete', ['id' => $order->order_number])}}"  title="Order Delete" class="{{$order->order_status == 'cancel' ? 'btn btn-danger btn-sm': 'disabled btn btn-danger btn-sm'}}" onclick="return confirm('Are you sure to delete this?')" >
                                            <i class="fa fa-trash"></i>
                                        </a>
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
@endsection