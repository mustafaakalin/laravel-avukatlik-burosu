<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="viewport-fit=cover,width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') {{ env('APP_NAME') }}</title>

  <link rel="icon" href="{{ asset('/storage/logo.webp') }}" type="image/x-icon">
  <style>
    /* custom.css */
    .prose pre {
      white-space: pre-wrap;
      /* Wrap preformatted text */
      word-wrap: break-word;
      /* Break long words */
    }

    .prose code {
      white-space: pre-wrap;
      /* Wrap inline code */
      word-wrap: break-word;
      /* Break long words */
    }
  </style>
  @vite('resources/css/app.css')
</head>

<body>
  <div class="container mx-auto">

    <div class="navbar bg-base-100 z-50 sticky top-0 bg-opacity-20 backdrop-blur-md">
      <div class="navbar-start">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
            <li><a href="{{ url('/about') }}"
                  class="btn glass hover:bg-yellow-400 hover:shadow-xl hover:shadow-yellow-600 transition duration-500">Hakkımızda</a>
            </li>
            <li>
              <a class="btn glass hover:bg-yellow-400 hover:shadow-xl hover:shadow-yellow-600 transition duration-500"
                  href="{{ url('/blog') }}">Blog</a>

            </li>
            <li><a href="{{ url('/services') }}"
                  class="btn glass hover:bg-yellow-400 hover:shadow-xl hover:shadow-yellow-600 transition duration-500">Hizmetlerimiz</a>
            </li>
            <li><a href="{{ url('/lawyers') }}"
                  class="btn glass hover:bg-yellow-400 hover:shadow-xl hover:shadow-yellow-600 transition duration-500">Avukatlarımız</a>
            </li>
          </ul>
        </div>
        <a class="flex items-center space-x-2 rounded-md glass hover:bg-yellow-400 hover:shadow-xl hover:shadow-yellow-600 transition duration-500 sm:text-base md:text-lg lg:text-xl px-4 py-2 sm:px-6 sm:py-3 md:px-8 md:py-4 lg:px-10 lg:py-5"
            href="{{ url('/home') }}">
          <img src="{{ asset('/storage/logo.webp') }}" alt="Logo"
              class="rounded-full h-6 w-6 sm:h-8 sm:w-8 md:h-10 md:w-10 lg:h-12 lg:w-12">
          <span>{{ Str::limit(env('APP_NAME'), 100) }}</span>
        </a>
      </div>
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a href="{{ url('/about') }}"
                class="btn glass hover:bg-yellow-400 hover:shadow-xl hover:shadow-yellow-600 transition duration-500">Hakkımızda</a>
          </li>
          <li><a href="{{ url('/blog') }}"
                class="btn glass hover:bg-yellow-400 hover:shadow-xl hover:shadow-yellow-600 transition duration-500">Blog</a>
          </li>
          <li><a href="{{ url('/services') }}"
                class="btn glass hover:bg-yellow-400 hover:shadow-xl hover:shadow-yellow-600 transition duration-500">Hizmetlerimiz</a>
          </li>
          <li><a href="{{ url('/lawyers') }}"
                class="btn glass hover:bg-yellow-400 hover:shadow-xl hover:shadow-yellow-600 transition duration-500">Avukatlarımız</a>
          </li>
        </ul>
      </div>
      <div class="navbar-end">
        <a href="{{ url('/contact') }}"
            class="btn glass  hover:bg-green-500 hover:shadow-xl hover:shadow-green-600 transition duration-500">İletişim</a>
      </div>
    </div>




    @yield('content')


    @php
    $links = [
    [
    'url' => 'https://www.adalet.gov.tr',
    'img' => 'https://www.diyarbakirbarosu.org.tr/public/uploads/post/1-1560177788.png',
    'alt' => 'Türkiye Cumhuriyeti Adalet Bakanlığı',
    'text' => 'Türkiye Cumhuriyeti Adalet Bakanlığı'
    ],
    [
    'url' => 'https://www.anayasa.gov.tr',
    'img' => 'https://www.diyarbakirbarosu.org.tr/public/uploads/post/2-1560177865.png',
    'alt' => 'Anayasa Mahkemesi',
    'text' => 'Anayasa Mahkemesi'
    ],
    [
    'url' => 'https://www.tccb.gov.tr',
    'img' => 'https://www.diyarbakirbarosu.org.tr/public/uploads/post/3-1560177929.png',
    'alt' => 'Türkiye Cumhuriyeti Başbakanlık',
    'text' => 'Türkiye Cumhuriyeti Başbakanlık'
    ],
    [
    'url' => 'https://www.danistay.gov.tr',
    'img' => 'https://www.diyarbakirbarosu.org.tr/public/uploads/post/4-1560177964.png',
    'alt' => 'T.C. Danıştay Başkanlığı',
    'text' => 'T.C. Danıştay Başkanlığı'
    ],
    [
    'url' => 'http://www.resmigazete.gov.tr/',
    'img' => 'https://www.diyarbakirbarosu.org.tr/public/uploads/post/5-1560177987.png',
    'alt' => 'Resmi Gazete',
    'text' => 'Resmi Gazete'
    ],
    [
    'url' => 'https://www.diyarbakirbarosu.org.tr',
    'img' => 'https://www.diyarbakirbarosu.org.tr/public/uploads/site/diyarbakir-barosu-1560166028.png',
    'alt' => 'Diyarbakır Barosu',
    'text' => 'Diyarbakır Barosu'
    ],
    [
    'url' => 'https://www.barobirlik.org.tr',
    'img' => 'https://www.diyarbakirbarosu.org.tr/public/uploads/post/6-1560178008.png',
    'alt' => 'Türkiye Barolar Birliği',
    'text' => 'Türkiye Barolar Birliği'
    ],
    [
    'url' => 'https://www.tbmm.gov.tr/develop/owa/tbmm_internet.anasayfa',
    'img' => 'https://www.diyarbakirbarosu.org.tr/public/uploads/post/7-1560178036.png',
    'alt' => 'Türkiye Büyük Millet Meclisi',
    'text' => 'Türkiye Büyük Millet Meclisi'
    ],
    [
    'url' => 'https://www.yargitay.gov.tr',
    'img' => 'https://www.diyarbakirbarosu.org.tr/public/uploads/post/8-1560178058.png',
    'alt' => 'Yargıtay',
    'text' => 'Yargıtay'
    ]
    ];
    @endphp
    <!-- Use DaisyUI's container class to wrap the content -->
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
      <!-- Use DaisyUI's divider component -->
      <div class="divider divider-info mb-4 text-xl">Faydalı Bağlantılar</div>

      <!-- Use DaisyUI's grid component -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-7 gap-4 gap-y-16">
        @foreach($links as $link)
        <!-- Use DaisyUI's card component -->
        <div
            class="card w-48 h-48 bg-base-100 shadow-2xl  hover:shadow-red-500  transition duration-300 ease-in-out mb-4">
          <!-- Use DaisyUI's tooltip component -->
          <div class="tooltip tooltip-error" data-tip="{{ $link['text'] }}">
            <a href="{{ $link['url'] }}" target="_blank" class="block">
              <!-- Use DaisyUI's image component -->
              <img src="{{ $link['img'] }}" alt="{{ $link['alt'] }}"
                  class="w-full h-full object-cover rounded-full hover:scale-105 transition duration-300 ease-in-out">
              <!-- Display text and alt values -->
              <p class="text-sm text-center">{{ $link['text'] }}</p>
              <p class="text-xs text-center text-gray-600">{{ $link['alt'] }}</p>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>





    <footer class="footer footer-center   p-10">
      <aside>
        {{-- logo --}}
        <img src="{{ asset('/storage/logo.webp') }}" alt="Logo" class="h-12 w-12 rounded-full">
        {{-- company name --}}
        <p class="font-bold">
          {{ env('APP_NAME') }}
        </p>
        <p>Copyright © {{date('Y')}} - Tüm Hakları Saklıdır</p>
      </aside>
      
    </footer>

  </div>


</body>

</html>