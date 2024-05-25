@extends('layouts.app')

@section('main-content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Order By Month</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('order.search') }}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <select class="form-control" name="month" required>
                                    <option value="">---> Select Month <---</option>
                                    <option value="01">Jan</option>
                                    <option value="02">Feb</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Apr</option>
                                    <option value="05">May</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Aug</option>
                                    <option value="09">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select class="form-control" name="year" required>
                                    <option value="">---> Select Year <---</option>
                                    <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input class="form-control btn btn-danger-gradient text-white" type="submit" value="Search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @if(isset($_GET['month']) && $_GET['year'])
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h4>Total Sales Amount In
                                @if($_GET['month']==1)
                                    January
                                    @elseif($_GET['month']==2)February
                                    @elseif($_GET['month']==3)March
                                    @elseif($_GET['month']==4)April
                                    @elseif($_GET['month']==5)May
                                    @elseif($_GET['month']==6)June
                                    @elseif($_GET['month']==7)July
                                    @elseif($_GET['month']==8)August
                                    @elseif($_GET['month']==9)September
                                    @elseif($_GET['month']==10)October
                                    @elseif($_GET['month']==11)November
                                    @elseif($_GET['month']==12)December
                                    @endif
                                , {{ $_GET['year'] }} :  {{ $orders['month_total'] }}</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">Order</th>
                                    <th class="wd-15p border-bottom-0">Order Number</th>
                                    <th class="wd-15p border-bottom-0">Order Total</th>
                                    <th class="wd-20p border-bottom-0">Date</th>
                                    {{--<th class="wd-15p border-bottom-0">Customer</th>--}}
                                    <th class="wd-20p border-bottom-0">Status</th>

                                    <th class="wd-20p border-bottom-0">Payment</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders['month_orders'] as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->order_number }}</td>
                                        <td>{{ $order->order_total }}</td>
                                        <td>{{ $order->order_date }}</td>
{{--                                        <td>{{ $order->customer->first_name.'('. $order->customer->phone.')'}}</td>--}}
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
    @endif


@endsection