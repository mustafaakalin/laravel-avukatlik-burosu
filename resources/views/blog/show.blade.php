@extends('app')
@section('content')

@if(session('success'))
<div role="alert" class="alert alert-success">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-6 w-6 shrink-0 stroke-current"
      fill="none"
      viewBox="0 0 24 24">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <span>{{ session('success') }}</span>
  </div>
@endif

<style>
    .prose {
    max-width: 100% !important;
}
</style>

<div class="container mx-auto p-4 md:p-8">
    <div class="card w-full bg-base-100 shadow-md">
        <div class="card-body flex justify-center flex-col">
            <h2 class="card-title  text-2xl font-bold mb-4">{{ $post->title }}</h2>
            <div class="carousel w-full h-64 mb-4">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/storage/{{ $post->photo }}" alt="{{ $post->title }}" class="w-full h-64 object-cover">
                    </div>
                </div>
            </div>
            <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl break-words mb-8 w-full">
                @php
                    use GrahamCampbell\Markdown\Facades\Markdown;
                @endphp
                {!! Markdown::convert($post->content) !!}
            </div>
            <div class="stats shadow mb-4">
                <div class="stat">
                    <div class="stat-title">Beğeniler</div>
                    <div class="stat-value">{{ $post->likes }}</div>
                </div>
                <div class="stat">
                    <div class="stat-title">Okunma</div>
                    <div class="stat-value">{{ $post->views }}</div>
                </div>
            </div>
            <div class="like-button mb-4">
                <form action="{{ url('/blog/'. $post->id .'/like') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary  flex items-center justify-center space-x-2 transition duration-300 ease-in-out transform hover:scale-105 hover:bg-blue-600">
                        <span class="text-xl">👍</span>
                        <span class="text-xl">Beğen</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="comments mt-8">
        <h3 class="text-2xl font-bold mb-4">Yorumlar</h3>
        @foreach ($post->comments as $comment)
            <div class="comment mb-4 p-4 border rounded-lg bg-base-100 shadow-md">
                <div class="flex items-center mb-2">
                    <div class="avatar mr-3">
                        <div class="w-10 rounded-full">
                            <img src="https://i.pravatar.cc/150?u={{ $comment->author }}" alt="{{ $comment->author }}">
                        </div>
                    </div>
                    <strong class="text-lg">{{ $comment->author }}</strong>
                </div>
                <p class="text-gray-700">{{ $comment->content }}</p>
            </div>
        @endforeach
    </div>
    <div class="comment-form mt-8">
        <h3 class="text-2xl font-bold mb-4">Yorum Yap</h3>
        <form action="{{ url('/blog/'. $post->id . '/comment') }}" method="post">
            @csrf
            <div class="form-control mb-4">
                <label for="author" class="label">
                    <span class="label-text">Ad Soyad:</span>
                </label>
                <input type="text" name="author" id="author" placeholder="Your name" class="input input-bordered" required>
            </div>
            <div class="form-control mb-4">
                <label for="content" class="label">
                    <span class="label-text">Yorum:</span>
                </label>
                <textarea name="content" id="content" cols="30" rows="10" placeholder="Your comment" class="textarea textarea-bordered" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Yorum Yap</button>
        </form>
    </div>
</div>
@endsection

@section('title', $post->title . ' Blog Detay')