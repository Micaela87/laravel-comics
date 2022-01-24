@extends('layouts.mainLayout')

@section('main')

<section class="home-main">
    <span class="series">current series</span>
    <div class="container container-flex">
        @foreach($productsData as $product)
            <div class="card">
                <div class="img-container">
                    <a href="{{ route('single') }}"><img src={{ $product["thumb"] }} alt={{ $product["series"] }}></a>
                </div>
                <span>{{ $product["series"] }}</span>
            </div>
        @endforeach
    </div>
    <div id="load-more">
        <span>load more</span> 
    </div>
</section>
<section id="blue-bar">
    <div class="s-container">
      <ul>
        {{-- <li v-for="(merch, i) in merchData" :key="i">
          <a href="merch.link">
            <img :src="require('@/assets/img/' + merch.url)" :alt="merch.text" :class="merch.url.includes('svg') ? 'img-svg' : ''">
            <span>{{ merch.text.toUpperCase() }}</span>
          </a>
        </li> --}}
      </ul>
    </div>
  </section>
    
@endsection