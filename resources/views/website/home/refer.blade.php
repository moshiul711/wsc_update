@extends('website.master')
@section('title')
    Refer & Win - Workstation Communication Limited
@endsection
@section('main-content')
    <div class="row mt-2">
        <div class="col-lg-12 col-md-12">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Refer & Earn</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Refer & Earn</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-6">
            <div class="card custom-card">
                <div class="card-body text-center">
                    <img src="{{ asset('/') }}website/assets/icons/refer.gif" alt="" style="height: 350px">
                </div>
            </div>
        </div>

    </div>
@endsection
