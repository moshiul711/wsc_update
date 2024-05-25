@extends('layouts.app')

@section('main-content')

    <style>
        .invoice-box {
            max-width: 100%;
            margin: auto;
            background-color: white;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
            margin-bottom: 10px;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
            font-weight: bold;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Order Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order Invoice</li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{route('admin.order-download-order-invoice', ['id' => $order->order_number])}}" target="_blank" title="Print Invoice">
                        <img src="{{ asset('/') }}website/assets/icons/printer.png" alt="">
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="invoice-box">
                <table cellpadding="0" cellspacing="0">
                    <tr class="top">
                        <td colspan="4">
                            <table>
                                <tr>
                                    <td class="title">
                                        <img src="http://localhost/bdTechCom/public/website/assets/images/logo1.png"/>
                                    </td>

                                    <td>
                                        <h4>Workstation Communication</h4>
                                        House 02, Road 03 <br/>
                                        Sector 13 Uttara Dhaka, Bangladesh<br/>
                                        Call +8801977699801 +8801977699806<br/>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="information">
                        <td colspan="4">
                            <table>
                                <tr>
                                    <td>
                                        <h4>Delivery Information</h4>
                                        {{$order->customer->first_name.' '.$order->customer->last_name}}<br/>
                                        {{$order->customer->phone}}<br/>
                                        {{$order->customer->address}}
                                    </td>

                                    <td>
                                        <h4>Order Track</h4>
                                        Invoice #: {{$order->order_number}}<br/>
                                        Order Date: {{$order->order_date}}<br/>
                                        Invoice Date: {{date('Y-m-d')}}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="heading">
                        <td>Payment Method</td>

                        <td colspan="3">Check #</td>
                    </tr>

                    <tr class="details">
                        <td>{{$order->payment_method == "cod" ? 'Cash On Delivery' : 'Online Payment'}}</td>
                        <td colspan="3">{{$order->order_total}}</td>
                    </tr>

                    <tr class="heading">
                        <td>Item</td>
                        <td style="text-align: center">Price</td>
                        <td style="text-align: center">Quantity</td>
                        <td style="text-align: right">Total</td>
                    </tr>
                    @php($sum=0)
                    @foreach($order->orderDetails as $orderDetail)
                        <tr class="item">
                            <td>{{$orderDetail->product_name}}</td>
                            <td style="text-align: center">{{$orderDetail->product_price}}</td>
                            <td style="text-align: center">{{$orderDetail->product_quantity}}</td>
                            <td style="text-align: right">{{$total = $orderDetail->product_price * $orderDetail->product_quantity}}</td>
                        </tr>
                        @php($sum=$sum + $total)
                    @endforeach
                    <tr class="heading">
                        <td></td>
                        <td>Sub Total</td>
                        <td style="text-align: center"><b>:</b></td>
                        <td style="text-align: right">{{$sum}}</td>
                    </tr>
                    <tr class="details">
                        <td></td>
                        <td>Delivery Charge</td>
                        <td style="text-align: center"><b>:</b></td>
                        <td style="text-align: right">{{$order->delivery_charge}}</td>
                    </tr>
                    <tr class="heading">
                        <td></td>
                        <td>Discount</td>
                        <td style="text-align: center"><b>:</b></td>
                        <td style="text-align: right">{{$order->discount}}</td>
                    </tr>
                    <tr class="details">
                        <td></td>
                        <td>Total Payable</td>
                        <td style="text-align: center"><b>:</b></td>
                        <td style="text-align: right">{{$order->order_total+$order->delivery_charge-$order->discount}}</td>
                    </tr>
                </table>
                {{--<table style="margin-top: 50px">--}}
                {{--<tr>--}}
                {{--<td>-------------</td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                {{--<td>Signature</td>--}}
                {{--<td style="text-align: left"></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--</tr>--}}
                {{--</table>--}}
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection

