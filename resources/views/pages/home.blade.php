@extends('layouts.mainLayout')

@section('main')

<section id="home-main">
    <span class="series">current series</span>
    <div class="container container-flex">
        @foreach($productsData as $product)
            <div class="card">
                <div class="img-container">
                    <img src={{ $product["thumb"] }} :alt={{ $product["series"] }}>
                </div>
                <span>{{ $product["series"] }}</span>
            </div>
        @endforeach
    </div>
    <div id="load-more">
        <span>load more</span> 
    </div>
</section>
    
@endsection