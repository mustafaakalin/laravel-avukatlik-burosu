@extends('app')
@section('content')

@php
use Carbon\Carbon;
Carbon::setLocale('tr');
@endphp

<div class="flex flex-col items-center justify-center mb-12">
  <h1 class="text-3xl font-bold mb-4 text-center">Blog</h1>
  <p class="text-lg  mb-12 text-center">Blog Yazılarımız.</p>
</div>
<!-- Grid container with responsive columns -->
<div class="container mx-auto p-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
  <!-- Loop through posts -->
  @foreach ($posts as $post)
  <!-- Card component with image, title, content, and action button -->
  <div class="card w-full bg-base-100 shadow-lg hover:shadow-2xl hover:shadow-indigo-600 duraction-500 transition">
    <!-- Image figure with alt text -->
    <figure>
      <img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
    </figure>
    <!-- Card body with title, content, and action button -->
    <div class="card-body p-4">
      <!-- Title with link to post details -->
      <h2 class="card-title text-lg font-bold">
        <a href="{{ route('blog.show', $post->id) }}" class="text-primary hover:text-primary-dark">
          {{ $post->title }}
        </a>
      </h2>
      <!-- Date published in Turkish format -->
      <p class="text-sm text-gray-600">
        {{ Carbon::parse($post->created_at)->translatedFormat('d F Y') }}
      </p>
      <!-- Content with markdown formatting and limit to 100 characters -->
      <p class="text-sm">{!! Str::markdown(Str::limit($post->content, 100)) !!}</p>
      <!-- Action button to read more -->
      <div class="card-actions justify-end">
        <a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary btn-sm">Oku</a>
      </div>
    </div>
  </div>
  @endforeach
</div>


@endsection

@section('title','Blog Listesi')