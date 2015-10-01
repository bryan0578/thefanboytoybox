@extends('layouts.app')
@section('title') The Fanbox :: ToyBox @stop
@section('content')
<div class="center">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="cta-wrap">
                        <h1>Collectible<br/>Stores</h1>
                        <p>Ceck out our lists of hobby shops vintage toy stores to find what your looking for. Build your collection, and share with other members </p>
                        <a data-toggle="modal" href='#modal-id'>Sign Up Here</a><br/>
                        <button class="btn btn-primary" onclick="location.href='collectible_stores'">GO &rarr;</button>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="cta-wrap">
                        <h1>Autograph<br/>Sellers</h1>
                        <p>Check out our autograph sellers, buy online or find photos to be signed at conventions. Collect and share with other members</p>
                        <a data-toggle="modal" href='#modal-id'>Sign Up Here</a><br/>
                        <button class="btn btn-primary" onclick="location.href='autograph_sellers'">GO &rarr;</button>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="cta-wrap">
                        <h1>Live<br/>Events</h1>
                        <p>Find live events for any occasion, comic-cons, horror conventions, book signings and more. Connect and share with other members</p>
                        <a data-toggle="modal" href='#modal-id'>Sign Up Here</a><br/>
                        <button class="btn btn-primary" onclick="location.href='live_events'">GO &rarr;</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta">
            <div class="cta-content">
                <h2>DON'T HAVE AN ACCOUNT</h2>
                <h1 id="green">SIGN UP NOW</h1>
                <p>As a member you can create a profile and get connected with other collectors. Share stories, pictures of your collections, and much more.</p>
                <button class="btn btn-primary" data-toggle="modal" data-target='#modal-id'>SIGN UP HERE</button>
            </div>

        
    
        </div>

@endsection
@stop