@extends('app')

@section('title', 'Hizmetlerimiz')

@section('content')

<section class="container mx-auto p-4 pt-12 mb-12">
  <h1 class="text-3xl font-bold mb-6 text-center" id="services">
    <a href="{{ url('/services') }}" class="link link-primary">Hizmetlerimiz</a>
  </h1>
  <p class="text-lg mb-12 text-center ">Size sunduğumuz hizmetleri keşfedin.</p>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($services as $service)
      <div class="card compact bg-base-100 shadow-md hover:shadow-2xl hover:scale-105 transition duration-500 hover:bg-blue-500 hover:shadow-blue-600   rounded-lg overflow-hidden">
        <figure class="relative w-full h-48">
          <img src="/storage/{{ $service->photo }}" alt="{{ $service->title }}" class="w-full h-full object-cover rounded-t-lg" />
        </figure>
        <div class="card-body p-4">
          <h2 class="card-title text-2xl font-bold ">{{ $service->title }}</h2>
          <p class=" mt-2">{{ $service->description }}</p>
        </div>
      </div>
    @endforeach
  </div>

</section>

@endsection