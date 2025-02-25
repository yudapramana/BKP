@extends('layouts.landing.v2.master')

@section('title', 'Web Kemenag Kab. Pesisir Selatan - Contact')

@section('_styles')

    {{-- Primary Meta Tags --}}
    <meta name="title" content="{{ $title }}">
    <meta name="description" content="{{ $title }}" />
    <meta name="keywords" content="PPID, PPID Kementerian Agama, Web Kemenag Kab. Pesisir Selatan, Komisi Informasi" />
    <meta name="author" content="Web Kemenag Kab. Pesisir Selatan" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="revisit-after" content="1 Days" />

    <!-- Open Graph / Facebook -->
    <meta property="og:site_name" content="{{ $title }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:description" content="Web - {{ $title }}">
    <meta property="og:image" content="{{ asset('sailor/img/logo.png') }}" />

    <meta property="og:type" content=website />
    <meta property="og:url" content="{{ URL::current() }}" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{{ $title }}" />
    <meta name="twitter:title" content="{{ $title }}" />
    <meta name="twitter:description" content="Web - {{ $title }}">
    <meta name="twitter:image" content="{{ asset('sailor/img/logo.png') }}" />
    <meta property="twitter:url" content="{{ URL::current() }}">

    <link rel="canonical" href="{{ URL::current() }}" />
    <link rel="alternate" hreflang="en-US" href="{{ URL::current() }}" />
    <link rel="shortcut icon" type="image/png" href="{{ URL::current() }}" />
@endsection

@section('content')

    <hr class="pt-0 mt-0">

    <!-- START SECTION CONTACT -->

    <section id="contact" class="contact">
        <div class="container">

            <div>

                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.71249825432!2d100.57676297370804!3d-1.3490055356952486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd34d7968e3b8cf%3A0xa41477ffa19841c2!2sKementerian%20Agama%20Pesisir%20Selatan!5e0!3m2!1sen!2sid!4v1737559611729!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location :</h4>
                            <p>Jl. Imam Bonjol No.1, IV Jurai, Kota Painan, Kab. Pesisir Selatan, 25651
                            </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>sumbar@kemenag.go.id</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>-</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form id="groupForm" method="post" action="/messages/store" enctype="multipart/form-data" role="form" class="php-email-form">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            {{-- <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-default">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>
    <!-- END SECTION CONTACT -->


@endsection


@section('_scripts')
    {{-- No Data --}}
@endsection
