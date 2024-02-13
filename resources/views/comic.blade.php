@extends('layout.mockup')

@section('content')
    <div class="jumbo">
        
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
    <div class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    {{-- talent --}}
                </div>
                <div class="col-6">
                    {{-- specs --}}
                </div>
            </div>
        </div>
    </div>
@endsection