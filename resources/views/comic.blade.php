@extends('layout.mockup')

@section('content')
    <div class="jumbo">
        
    </div>
    <div class="bg-comic">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="thumb-comic">
                        <div class="thumb-img">
                            <span class="thumb-type">{{ strtoupper($item['type']) }}</span>
                            <img src="{{ $item['thumb']}}" alt="{{ $item['title'] }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-8">
                <h2>{{ $item['title'] }}</h2>
                {{-- tabella verde --}}
                <p>{{ $item['description'] }}</p>
            </div>
            <div class="col-4">
                <div class="text-end">
                    <h6 class="text-secondary">ADVERTISEMENT</h6>
                    <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="adv">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-specs">
        <div class="container py-4">
            <div class="row">
                <div class="col-6">
                    <h3>Talent</h3>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6>Art by:</h6>
                        </div>
                        <div class="col-8">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam, perspiciatis quidem repudiandae possimus distinctio accusamus omnis provident quos eius incidunt
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6>Written by:</h6>
                        </div>
                        <div class="col-8">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam, perspiciatis quidem repudiandae possimus distinctio accusamus omnis provident quos eius incidunt
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6">
                    <h3>Specs</h3>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6>Series:</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-primary">{{ strtoupper($item['series']) }}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6>U.S. Price:</h6>
                        </div>
                        <div class="col-8">
                            {{ strtoupper($item['price']) }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6>On Sale Date:</h6>
                        </div>
                        <div class="col-8">
                            {{ $item['sale_date'] }}
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection