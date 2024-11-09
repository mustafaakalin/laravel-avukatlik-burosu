@extends('app')

@section('content')

<div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
    <h1 class="text-3xl font-bold mb-6">İletişim</h1>
    <form action="/contact" method="post" class="space-y-4">
        @csrf
        <div class="form-control">
            <label for="name" class="label">
                <span class="label-text">Ad soyad:</span>
            </label>
            <input type="text" name="name" id="name" class="input input-bordered w-full" required>
        </div>
        
        <div class="form-control">
            <label for="email" class="label flex items-center gap-2">
                <span class="label-text">E-posta:</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                    <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                    <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                </svg>
            </label>
            <input type="email" name="email" id="email" class="input input-bordered w-full" required>
        </div>
        
        <div class="form-control">
            <label for="message" class="label">
                <span class="label-text">Mesajınız:</span>
            </label>
            <textarea name="message" id="message" class="textarea textarea-accent w-full" cols="30" rows="10" required></textarea>
        </div>
        
        <div class="form-control">
            <button class="btn btn-primary w-full" type="submit">Gönder</button>
        </div>
    </form>
</div>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif
    
@endsection

@section('title', 'İletişim')
    