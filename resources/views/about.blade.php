@extends('app')

@section('content')

<!-- About Us Page -->
<div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
  <div class="flex flex-col items-center justify-center mb-12">
    <h1 class="text-3xl font-bold mb-4 text-center">Hakkımızda</h1>
    <p class="text-lg  mb-12 text-center">Bizimle ilgili daha fazla bilgi edinin.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($about as $item)
      <div class="card compact bg-base-100 shadow-lg">
        <div class="card-body">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </div>
            <h2 class="card-title text-2xl font-bold">{{ $item->title }}</h2>
          </div>
          <p class="text-base ">{{ $item->content }}</p>
        </div>
      </div>
    @endforeach
  </div>
</div>
    
@endsection

@section('title','Hakkımızda')
    