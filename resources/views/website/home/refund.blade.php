@extends('website.master')

@section('title')
    Return & Refund Policy - Workstation Communication Limited
@endsection

@section('main-content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Return & Refund Policy</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Return & Refund Policy</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-p">
            <div class="card custom-card">
                <div class="card-header">
                    <h2 class="text-bold text-lg ">Return & Refund Policies of Workstation Communication Limited</h2>
                </div>
                <div class="card-body text-justify">
                    <h4 class="text-bold">
                        Flexible return policy gives customers a comfortable experience in e-shopping.
                        We have simple terms of product return (online shopping) policy which is convenient for the buyer.
                    </h4>
                    <hr>
                    <h5>
                        1. The product must be unused, If a product is returned to us in an inadequate condition, we reserve the right to send it back to you.
                    </h5>
                    <hr>
                    <h5>
                        2. The product must include the original tags, user manual, warranty cards, freebies and accessories. Within 7 days.
                    </h5>
                    <hr>
                    <h5>
                        3. The product must be returned in the original and undamaged manufacturer packaging / box. If the product was delivered in a second layer of WSC packaging, it must be returned in the same condition with return shipping label attached. Do not put tape or stickers on the manufacturers box.
                    </h5>
                    <hr>
                    <h5>
                        4. If the product does not work with another device, the return will not be applicable.
                    </h5>
                    <hr>
                    <h5>
                        5. In this case the issue will be covered under warranty. The customer shall bring the product to Workstation Communication Limited office for warranty claim.
                    </h5>
                    <hr>

                </div>
            </div>
        </div>
    </div>

@endsection
