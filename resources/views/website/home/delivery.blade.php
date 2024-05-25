@extends('website.master')

@section('title')
    Delivery Policy - Workstation Communication Limited
@endsection

@section('main-content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Delivery Policy</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Delivery</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-p">
            <div class="card custom-card">
                <div class="card-header">
                    <h2 class="text-bold text-lg ">Delivery Policies of Workstation Communication Limited</h2>
                </div>
                <div class="card-body text-justify">
                    {{--<h4 class="text-bold">--}}
                        {{--Home Delivery Available Nationwide in Bangladesh.--}}
                    {{--</h4>--}}
                    <h5>
                        ১. শুধুমাত্র ঢাকার মধ্যে অনলাইন অর্ডারের ক্ষেত্রে ‘Cash On Delivery (COD)’ সুবিধা রয়েছে।
                    </h5>
                    <hr>
                    <h5>
                        ২. কুরিয়ারের মাধ্যমে ডেলিভারকৃত পণ্যের সম্পূর্ণ কুরিয়ার চার্জ ক্রেতাকে বহন করতে হবে।
                    </h5>
                    <hr>
                    <h5>
                        ৩. বর্তমানে অনলাইন অর্ডারে ডেলিভারির ক্ষেত্রে সময় ১ থেকে ৩ দিন অথবা তারও বেশি লাগতে পারে।
                    </h5>
                    <hr>
                    <h5>
                        ৪. পেমেন্ট কনফার্মেশনের এসএমএস পাবার পর ৩ দিনের মধ্যে ক্রেতাকে পেমেন্ট করতে হবে। এর পর পেমেন্ট করলে পণ্য স্টক শেষ হয়ে যেতে পারে অথবা মূল্য পরিবর্তিত হতে পারে।
                    </h5>
                    <hr>
                    <h5>
                        ৫. অর্ডারক্রীত পণ্য স্টকে না থাকলে ক্রেতার সম্মতিক্রমে পণ্য পরিবর্তন অথবা মূল্য রিফান্ড করা হবে।
                    </h5>
                    <hr>
                    <h5>
                        ৬. প্রোডাক্ট এর বুকিং এর জন্য এর মূল্যের সবটুকু অথবা কিছু অংশ অগ্রিম প্রদান করতে হবে। প্রোডাক্ট পৌঁছানোর সময় এবং ডেলিভারি চার্জ নির্ভর করবে নির্দিষ্ট কুরিয়ার সার্ভিস ও প্রোডাক্ট এর ভিন্নতার উপর।
                    </h5>
                    <hr>

                </div>
            </div>
        </div>
    </div>

@endsection
