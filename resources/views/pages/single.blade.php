@extends('layouts.mainLayout')

@section('main')

<section class="home-main">
    <section id="blue-bar">
        <div class="s-container">

        </div>
    </section>
    <div class="container container-flex">
        <h2>action comics #1000: the deluxe edition</h2>
    </div>
</section>
<section id="grey-bar">
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