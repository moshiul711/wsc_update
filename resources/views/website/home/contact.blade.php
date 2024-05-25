@extends('website.master')

@section('title')
    Contact - Workstation Communication Limited
    @endsection

@section('main-content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Contact Us</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('/') }}website/assets/icons/contact1.png" alt="">
        </div>
        <div class="col-md-6">
            <div class="card custom-card">
                <div class="card-header border-bottom">
                    <h2 class="card-title text-lg-bold">Contact Form</h2>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('contact.message') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="inputEmail2" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control" id="inputPassword3" placeholder="phone" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control"  rows="5" name="message" placeholder="Write Your Message" required></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <div style="float: right;">
                                <button type="submit" class="btn btn-success-gradient">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 my-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.5566427425033!2d90.38912517417619!3d23.869872384181484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41bbb5acb1f%3A0xeb8a49fa5d1d1637!2sWorkstation%20Communication!5e0!3m2!1sen!2sbd!4v1702278844213!5m2!1sen!2sbd" height="600" style="border:0; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
