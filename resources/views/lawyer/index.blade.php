@extends('app')

@section('content')

<main class="min-h-screen flex flex-col items-center py-12">
    <section class="w-full max-w-6xl px-4">
        <h1 class="text-3xl font-bold mb-4">Avukatlarımız</h1>
        @foreach ($lawyers as $lawyer)
        <div class="card w-full bg-base-100  hover:shadow-yellow-500 shadow-xl transition duration-500 ease-in-out hover:-translate-y-2 mb-4 last:mb-0">
            <div class="flex items-center">
                <img src="{{ asset('storage/' . $lawyer->photo) }}" alt="{{ $lawyer->name }}" class="w-48 rounded-md object-cover mr-4" />
                <div class="card-body">
                    <h2 class="card-title text-lg font-bold">{{ $lawyer->name }}</h2>
                    <p class="text-sm">{{ $lawyer->bio }}</p>
                    <div class="flex flex-wrap justify-between mt-4">
                        <p class="text-sm">{{ $lawyer->email }}</p>
                        <p class="text-sm">{{ $lawyer->phone }}</p>
                    </div>
                    <div class="badge badge-primary badge-md mt-4">
                        {{ $lawyer->specialty }}
                        <span class="badge-indicator badge-indicator-dot inline-block bg-primary"></span>
                    </div>
                    <a href="{{ $lawyer->bio }}" target="_blank" class="btn btn-primary btn-sm mt-4">
                        Baro Levhası
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</main>

@endsection