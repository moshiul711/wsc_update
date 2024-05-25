@extends('website.master')
@section('title')
    FAQs - Workstation Communication Limited
@endsection
@section('main-content')
    <div class="row mt-2">
        <div class="col-lg-12 col-md-12">
            <div class="page-header">
                <div>
                    <h1 class="page-title">FAQs</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-6">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Frequently Asked Questions...</h3>
                </div>
                <div class="card-body">
                    {{--<p class="text-muted ">The default collapse behavior to create an accordion.</p>--}}
                    <div aria-multiselectable="true" class="accordion-primary" id="accordion" role="tablist">
                        <div class="card mb-0 border-0">
                            <div class="card-header border-bottom-0" id="headingOne" role="tab">
                                <a aria-controls="collapseOne" aria-expanded="true" data-bs-toggle="collapse" href="#collapseOne" class="accor-basic">Q. How does the site work?</a>
                            </div>
                            <div aria-labelledby="headingOne" class="collapse show" data-bs-parent="#accordion" id="collapseOne" role="tabpanel">
                                <div class="card-body br-bottom-radius-5">
                                    A. You can browse the site or use our search engine to find your desired products. You can then add them to your shopping bag and click on Place order. You let us know your address, select a delivery time – and voila, you are done. Our representative will then deliver your order right to your home or office.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0 mt-2 border-0">
                            <div class="card-header border-bottom-0" id="headingTwo" role="tab">
                                <a aria-controls="collapseTwo" aria-expanded="false" class="accordion collapsed accor-basic" data-bs-toggle="collapse" href="#collapseTwo">Q. How can I contact you?</a>
                            </div>
                            <div aria-labelledby="headingTwo" class="collapse" data-bs-parent="#accordion" id="collapseTwo" role="tabpanel">
                                <div class="card-body br-bottom-radius-5">
                                    A. You can always call 01977699806 or mail us at info@workstation.com.bd.
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2 border-0">
                            <div class="card-header border-bottom-0" id="headingThree" role="tab">
                                <a aria-controls="collapseThree" aria-expanded="false" class="accordion collapsed accor-basic" data-bs-toggle="collapse" href="#collapseThree">Q. I can’t find the product I am looking for. What do I do? </a>
                            </div>
                            <div aria-labelledby="headingThree" class="collapse" data-bs-parent="#accordion" id="collapseThree" role="tabpanel">
                                <div class="card-body br-bottom-radius-5">
                                    A. We are always open to new suggestions and will add an item to our inventory just for you. There is a "Product Request" feature that you can use to inform us of your requirement. You can also call 01977699806 or mail us at info@workstation.com.bd to add an item to our inventory.                                 </div>
                            </div><!-- collapse -->
                        </div>
                    </div><!-- accordion -->
                </div>
            </div>
        </div>
    </div>
@endsection
