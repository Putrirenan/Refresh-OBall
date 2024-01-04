@extends('layouts.main')
@include('partials.navbar')
@section('container')
<div class="mx-auto">
  <div class="relative shadow-xl sm:overflow-hidden">
    <div class="absolute inset-0">
      <img class="h-full w-full object-cover" src="http://localhost:8000/assets/img/jumbo.png" alt="library background">
      <div class="absolute inset-0 bg-gradient-to-r from-gray-400 to-gray-400 mix-blend-multiply"></div>
    </div>
    <div class="grid grid-cols-3 gap-2 pl-36 relative bg-auto lg:py-20">
      <div class="col-span-1">
        <img class="h-72 w-72 object-left" src="http://localhost:8000/assets/img/Oball.png" alt="O-Ball Logo">
      </div>
      <div class="col-span-2 px-16">
        <h1 class="mt-6 max-w-lg text-5xl font-semibold text-indigo-100 sm:max-w-3xl">Selamat Datang!</h1>
        <p class="mt-2 max-w-lg text-xl text-indigo-100 sm:max-w-3xl">Website O-Ball menyediakan berbagai macam video panduan teknik permainan sepak bola.</p>
        <a href="#sejarah"><button class="flex content-center mt-4 bg-gray-700 text-white hover:bg-gray-800 hover:text-white px-6 py-2 rounded-md text-sm font-medium shadow-lg">
          Lihat Sekarang
        </button></a>
      </div>
    </div>
  </div>
</div>
{{-- 
<div class="pt-10 bg-orange-100 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
  <div class="mx-auto max-w-7xl lg:px-8">
    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
      <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
        <div class="lg:py-24">
          <a href="#" class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
            <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full">LiberBooks</span>
            <span class="ml-4 text-sm">Visit our careers page</span>
            <!-- Heroicon name: solid/chevron-right -->
            <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
          <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
            <span class="block">Welcome to Open</span>
            <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-teal-200 to-cyan-400 sm:pb-5">LiberBooks</span>
          </h1>
          <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">Merupakan sebuah perpustakaan berbasis online yang menyediakan berbagai macam video yang dapat diunduh secara gratis.</p>
          <div class="mt-10 sm:mt-12">
          </div>
        </div>
      </div>
      <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
          <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
          <img class="w-full rounded-lg lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"  src="http://localhost:8000/assets/img/4.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div> --}}


<!-- Sejarah Sepak Bola -------------------------------------------->
<div id="sejarah" class="relative bg-[#e9e7e7] py-12">
  <div class="text-center justify-center">
    <p class="text-3xl font-extrabold tracking-tight text-indigo-900 sm:text-4xl">Sejarah Sepak Bola</p>
    <span class="inline-flex h-1 w-40 rounded bg-gray-300 mt-2"></span>
    <span class="inline-flex -ml-2 h-1 w-40 rounded bg-[#6278f1] mt-2"></span>
  </div> 
</div>

<!-- Deskripsi Sejarah Sepak Bola -------------------------------------------->
<div class="mx-auto">
  <div class="relative shadow-xl sm:overflow-hidden">
    <div class="absolute inset-0">
      <img class="h-full w-full blur-[1px] object-cover" src="http://localhost:8000/assets/img/sejarah.png" alt="Stadion Sepak Bola">
      <div class="absolute inset-0 bg-gradient-to-r from-gray-500 to-gray-500 mix-blend-multiply"></div>
    </div>
    <div class="grid grid-cols-3 gap-2 pl-24 relative bg-auto lg:py-8">
      <div class="col-span-3">
        <p class="max-w-lg text-l text-justify shadow-lg text-indigo-200 indent-10 sm:max-w-6xl">Sejarah Sepak Bola Indonesia dimulai pada masa penjajahan Belanda dimulai dari tahun 1914. Pada awal perkembangannya, sepak bola hanya dimainkan di lingkungan orang-orang Belanda, terutama di kota-kota besar. Setelah dimainkan di lingkungan orang Belanda, sepak bola di Indonesia dimainkan oleh kaum terpelajar di Indonesia di kota-kota besar dan menyebar hingga di daerah-daerah. Kemudian, pembentukan PSSI (Persatoean Sepakraga Seloeroeh Indonesia) menjadi awal sejarah sepak bola Indonesia. Dapat dikatakan PSSI lahir disebabkan karena kepentingan politik bangsa, menentang penjajahan serta strategi untuk memupuk benih nasionalisme di hati pemuda Indonesia dengan menggunakan olahraga sepak bola. </p>
        <p class="max-w-lg text-l text-justify shadow-lg text-indigo-200 indent-10 sm:max-w-6xl">Kemudian pada 1951, PSSI secara resmi menggelar kompetisi setelah kemerdekaan Indonesia yang diberi nama Kejuaraan Nasional (Kejurnas) PSSI. Seiring perjalanan waktu, kompetisi sepak bola Indonesia mengalami perubahan nama. Dari Divisi Utama Perserikatan, Galatama, Liga Indonesia, hingga Liga 1. Adapun perkembangan PSSI saat ini telah memperluas jenis kompetisi dan pertandingan yang dinaunginya. Sepak bola menjadi salah satu olah raga yang digemari di Tanah Air dengan antusiasme penontonnya. Sepakbola bukan sekedar olah raga yang menarik hati masyarakat juga tontonan pertandingan yang menarik.</p>
      </div>
    </div>
  </div>
</div>


 <!-- Testimonial section -->
 <section>
  <div class="container mx-auto p-10">
    <div class="text-center pb-6">
      <h1 class="text-3xl font-extrabold">Sekilas Informasi Sepak Bola</h1>
      <span class="inline-flex h-1 w-40 rounded bg-gray-300 mt-2"></span>
      <span class="inline-flex -ml-2 h-1 w-40 rounded bg-[#6278f1] mt-2"></span>
    </div>
    <div class="flex justify-center">
      <div class="h-full text-center ml-5 p-5 shadow-md bg-gray-300 hover:bg-gray-200 rounded-2xl">
        <p class="leading-relaxed">“Sepakbola adalah suatu permainan yang dilakukan dengan jalan menyepak, yang mempunyai tujuan untuk memasukkan bola kegawang lawan dengan mempertahankan gawang tersebut agar tidak kemasukan bola”</p>
        <span class="inline-flex h-0.5 w-24 rounded bg-blue-800 mt-4 mb-2"></span>
        <h2 class="title-font font-medium text-sm">Muhajir (2007:22)</h2>
        <p class="text-gray-500">Ahli</p>
      </div>
      <div class="h-full text-center ml-5 p-5 shadow-md bg-gray-300 hover:bg-gray-200 rounded-2xl">
        <p class="leading-relaxed">“Permainan sepakbola merupakan suatu olahraga yang dimainkan oleh 11 lawan 11 pemain dalam satu tim yang dimaikan di lapang empat persegi panjang dengan ukuran panjang 100-110 meter dan lebar 64-75 meter, serta waktu permainan 2 x 45 menit”</p>
        <span class="inline-flex h-0.5 w-24 rounded bg-blue-800 mt-4 mb-2"></span>
        <h2 class="title-font font-medium text-sm tracking-wider">Kosasih (dalam Razbie, dkk. 2018)</h2>
        <p class="text-gray-500">Ahli</p>
      </div>
      <div class="h-full text-center ml-5 p-5 shadow-md bg-gray-300 hover:bg-gray-200 rounded-2xl">
        <p class="leading-relaxed">Teknik dasar sepakbola ada enam macam, yaitu: 1) mengoper bola (passing), 2) menggiring (dribbling), 3) menendang bola (shooting), 4) menghentikan bola (controlling), 5) menyundul bola (heading), 6) lemparan kedalam (throw-in)</p>
        <span class="inline-flex h-0.5 w-24 rounded bg-blue-800 mt-4 mb-2"></span>
        <h2 class="title-font font-medium text-sm tracking-wider">Misbahudin dan Winarno (2020)</h2>
        <p class="text-gray-500">Ahli</p>
      </div>
    </div>
  </div>
</section>


<!-- Blog section -->
{{-- <div class="relative bg-amber-50 py-16 sm:py-24 lg:py-32">
  <div class="relative">
    <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
      <p id="video" class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Trending Books</p>
      <p class="mt-5 mx-auto max-w-prose text-xl text-gray-500">Berikut merupakan beberapa video yang sering dibaca atau di download oleh user</p>
    </div>
    
    
    <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
      @foreach($video as $v)
      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="{{ asset('storage/' . $v->image) }}" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-cyan-600">
              <a href="/allbooks?category={{ $v->category->name }}" class="hover:underline hover:text-amber-900">{{ $v->category->name }}</a>
            </p>
              <p class="text-xl font-semibold text-gray-900">{{ $v->judul }}</p>
              <p class="mt-3 text-base text-gray-500">{!! $v->deskripsi !!}</p>
           <a href="/allbooks" class="text-gray-700 hover:text-amber-900">Read More....</a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <p class=""> {{ $v->penulis }} </p>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-03-16"> {{ $v->tahun_terbit }} </time>
                <span aria-hidden="true"> &middot; </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
  <div class="flex justify-center mt-10">
    <a href="/allbooks"><button type="button" class=" inline-flex rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-900 text-base font-medium text-white hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">See More</button></a>
  </div>
</div> --}}
@include('layouts.footer')


@endsection

  

