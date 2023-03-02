@extends('layouts.template')
@section('title', 'Dashboard')

@section('content')
    <div class="page-h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Dashboard</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Responsive Design</h3>
                    <p>Stone template is provided by <a href="http://www.templatemo.com" target="_parent">templatemo</a> website. Credits go to Smashing Magazine for <a href="http://www.smashingmagazine.com/2012/11/20/art-professions-icons-png/">Art Professions Icon Set</a> and <a href="http://unsplash.com">Unsplash</a> for images. Praesent imperdiet orci se ante vehicula pulvinar. Morbi adipiscing molestie iaculis. Maecenas accumsan gravida est, quis placerat neque ullamcorper vitae.
                <br><br>Aenean cursus non neque at porta. Lorem ipsum dolor  amet, consectetur adipiscing elit. Praesent massa justo, eleifend ut purus sed, pellentesque scelerisque ligula. Fusce ullamcorper rutrum est, nec ullamcorper velit cursus eget.</p>
                </div>
                <div class="col-md-6 text-center">
                    <div class="image-holder">
                        <img src="{{ asset('images/1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="second-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center">
                    <img src="{{ asset('images/s1.png') }}" alt="">
                    <h4>DRAW THE SCATCH</h4>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <img src="{{ asset('images/s2.png') }}" alt="">
                    <h4>MIX IT UP</h4>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <img src="{{ asset('images/s3.png') }}" alt="">
                    <h4>TAKE A PHOTO</h4>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <img src="{{ asset('images/s4.png') }}" alt="">
                    <h4>PREVIEW PRINT</h4>
                </div>
            </div>
        </div>
      </div>
@endsection

@section('slider')
    @parent
@endsection
