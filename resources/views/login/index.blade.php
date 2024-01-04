@extends('layouts.main')
{{-- @include('partials.navbar') --}}
@section('container')
<div class="min-h-full flex">
  <div class="bg-[#FEFCF3] flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:px-20 xl:px-24">
    <div class="mx-auto w-full max-w-sm">
      <div>
        <img class="mx-auto h-auto w-[120px] " src="http://localhost:8000/assets/img/Oball.png" alt="Logo">
        <h2 class="mt-6 text-2xl text-center font-extrabold text-gray-900">Masukan Akun Admin</h2>
        <p class="mt-2 text-sm text-gray-600">
        </p>
      </div>

      <div class="mt-8">
        {{-- <div>
          <div>
            <p class="text-sm font-medium text-gray-700">Akses akun dengan</p>
            <div class="mt-1 grid grid-cols-1 gap-3">
              <div>
                <a href="/redirect" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                  <span class="sr-only">Masuk dengan Google</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/></svg>  
                  </a>
              </div>             
            </div>
          </div>

          <div class="mt-6 relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
              <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-2 bg-[#FEFCF3] text-gray-500 "> Atau lanjutkan dengan </span>
            </div>
          </div>
        </div> --}}

        <div class="mt-6">
          <form action="/login" method="POST" class="space-y-6">
            @csrf
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700"> Alamat Email </label>
              <div class="mt-1">
                <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('email') invalid:border-red-900 @enderror" autofocus>
                @error('email')
                <div class="invalid-feedback text-red-800 ">
                  {{ $message }}
                </div>
              @enderror
              </div>
            </div>
            
            <div class="space-y-1">
              <label for="password" class="block text-sm font-medium text-gray-700"> Kata Sandi </label>
              <div class="mt-1">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="flex items-center justify-between">
              {{-- <div class="text-sm">
                <p>Belum memiliki akun?</p><a href="/register" class="font-medium text-indigo-600 hover:text-indigo-500"> Daftar disini! </a>
              </div> --}}
            </div>
            <div>
              <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-700 hover:bg-[#678983] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Masuk</button>
          </form>
        </div>
        {{-- <a href="/"><button class=" mt-3 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#678983] hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Kembali</button></a> --}}
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="hidden lg:block relative w-0 flex-1">
    <img class="absolute inset-0 h-full w-full object-cover" src="http://localhost:8000/assets/img/stadion.png" alt="Stadion Sepak Bola">
  </div> --}}
</div>

@endsection