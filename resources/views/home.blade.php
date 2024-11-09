@extends('app')

@section('title', 'AnaSayfa')

@section('content')

<header class=" py-12">
    <div class="container mx-auto p-4">
        <div class="flex justify-center">
            <img src="{{ asset('/storage/logo.webp') }}" alt="Law Firm Logo" class="h-72 rounded-3xl ">
        </div>
        <h1 class="text-3xl font-bold text-center">Hukuki Danışmanlık ve Avukatlık Hizmetleri</h1>
        <p class="text-lg text-center">Uzman avukatlarımızla birlikte, hukuki sorunlarınızın çözümünü bulmak için buradayız.</p>
        <nav class="flex justify-center mt-4">
            <a href="#hizmetlerimiz" class="text-lg font-bold mx-4">Hizmetlerimiz</a>
            <a href="#avukatlarımız" class="text-lg font-bold mx-4">Avukatlarımız</a>
            <a href="#iletisim" class="text-lg font-bold mx-4">İletişim</a>
        </nav>
    </div>
</header>

@php
use Carbon\Carbon;
Carbon::setLocale('tr');
@endphp

<main class="min-h-screen flex flex-col items-center py-12 ">
  <section class="w-full max-w-6xl px-4">
    <h1 class="text-4xl font-bold mb-6 text-center" id="blog">Blog Yazıları</h1>
    <p class="text-lg mb-12 text-center ">En son blog yazılarımızı keşfedin.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ($posts as $post)
        <article class="card shadow-lg hover:shadow-2xl transition-shadow duration-300 rounded-lg overflow-hidden relative">
          <figure class="relative">
            <img src="/storage/{{ $post->photo }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-75"></div>
            <div class="absolute bottom-0 left-0 p-4 text-white">
              <h2 class="text-xl font-bold">{{ $post->title }}</h2>
            </div>
          </figure>
          <div class="absolute top-0 left-0 p-4 text-white text-2xl font-bold bg-primary bg-opacity-75 rounded-br-lg">
            {{ Carbon::parse($post->created_at)->translatedFormat('d F Y') }}
          </div>
          <div class="card-body p-4">
            <p class="mb-4">{{ Str::limit($post->content, 100) }}</p>
            <div class="card-actions justify-end">
              <a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary">Devamını Oku</a>
            </div>
          </div>
        </article>
      @endforeach
    </div>
  </section>


    <section class="w-full max-w-6xl px-4 my-12">
      <h1 class="text-4xl font-bold mb-6 text-center" id="avukatlarımız">Avukatlarımız</h1>
      <p class="text-lg mb-12 text-center ">Uzman avukatlarımızı tanıyın.</p>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($lawyers as $lawyer)
          <a href="{{ route('lawyers.show', $lawyer->id) }}" class="flex flex-col items-center shadow-lg hover:shadow-2xl transition-shadow duration-300 rounded-xl overflow-hidden relative p-6">
            <figure class="relative w-32 h-32 mb-4">
              <div class="avatar online indicator">
                <span class="indicator-item badge badge-secondary">{{ $lawyer->specialty }}</span>
                <div class="w-32 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                  <img src="/storage/{{ $lawyer->photo }}" alt="{{ $lawyer->name }}" class="w-full h-full object-cover rounded-full" />
                </div>
              </div>
            </figure>
            <div class="text-center">
              <h2 class="text-xl font-bold ">{{ $lawyer->name }}</h2>
            </div>
          </a>
        @endforeach
      </div>
  </section>

  <section class="w-full max-w-6xl px-4 mt-12" id="hizmetlerimiz">
    <h1 class="text-4xl font-bold mb-6 text-center" id="services"><a href="{{ url('/services') }}">Hizmetlerimiz</a></h1>
    <p class="text-lg mb-12 text-center ">Size sunduğumuz hizmetleri keşfedin.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ($services as $service)
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300 rounded-lg overflow-hidden">
          <figure class="relative w-full h-48">
            <img src="/storage/{{ $service->photo }}" alt="{{ $service->title }}" class="w-full h-full object-cover" />
          </figure>
          <div class="card-body text-center p-4">
            <h2 class="card-title text-2xl font-bold ">{{ $service->title }}</h2>
            <p class=" mt-2">{{ $service->description }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </section>
  

</main>

@endsection