@extends('layout.mockup')

@section('content')
<div class="jumbo">

</div>
<div class="container py-5">
    <div class="row row-gap-4">
        @foreach ($comics as $comic)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="comic">
                    <div class="comic-img">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>
                    <div class="comic-title">
                        {{$comic['title']}}
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-12 text-center">
            <span class="btn btn-primary py-1 px-4 rounded-1">LOAD MORE</span>
        </div>
    </div>
</div>
<div class="bg-primary">
    <div class="container py-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="item">
                    <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="item">
                    <h6>DIGITAL COMICS</h6>
                </div>
            </div>
            <div class="col-auto">
                <div class="item">
                    <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="item">
                    <h6>DC MERCHANDISE</h6>
                </div>
            </div>
            <div class="col-auto">
                <div class="item">
                    <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="item">
                    <h6>SUBSCRIPTION</h6>
                </div>
            </div>
            <div class="col-auto">
                <div class="item">
                    <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="item">
                    <h6>COMIC SHOP LOCATOR</h6>
                </div>
            </div>
            <div class="col-2">
                <div class="item">
                    <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="item">
                    <h6>DC POWER VISA</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
