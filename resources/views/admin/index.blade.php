
@extends('admin.layouts.main')
@section('container')
<div class="h-full flex">
  <div class="fixed inset-0 z-40 flex md:hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

    <div class="relative max-w-xs w-full bg-indigo-700 pt-5 pb-4 flex-1 flex flex-col">
      <div class="absolute top-1 right-0 -mr-14 p-1">
        <button type="button" class="h-12 w-12 rounded-full flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-white">
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
          <span class="sr-only">Close sidebar</span>
        </button> 
      </div>

      <div class="flex-shrink-0 px-4 flex items-center">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="Workflow">
      </div>
      <div class="mt-5 flex-1 h-0 px-2 overflow-y-auto">
        <nav class="h-full flex flex-col">
          <div class="space-y-1">
            <a href="#" class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium">
              <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              <span>Beranda</span>
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium">
              <!-- Heroicon name: outline/view-grid -->
              <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
              </svg>
              <span>Semua File</span>
            </a>

            <a href="#" class="bg-indigo-800 text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium" aria-current="page">
              <!-- Heroicon name: outline/photograph -->
              <svg class="text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              <span>Video</span>
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium">
              <!-- Heroicon name: outline/user-group -->
              <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              <span>Shared</span>
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium">
              <!-- Heroicon name: outline/collection -->
              <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
              </svg>
              <span>Albums</span>
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium">
              <!-- Heroicon name: outline/cog -->
              <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <span>Settings</span>
            </a>
          </div>
        </nav>
      </div>
    </div>

  </div>

  <!-- Content area -->
  <div class="flex-1 flex flex-col overflow-hidden">
    <header class="w-full">
      <div class="relative z-10 flex-shrink-0 h-16 bg-white border-b border-gray-200 shadow-sm flex">
 
        <div class="flex-1 flex justify-between px-4 sm:px-6">
          <div class="flex-1 flex">
            <form class="w-full flex md:ml-0" action="/admin">
              <label for="desktop-search-field" class="sr-only">Mencari semua media</label>
              <label for="mobile-search-field" class="sr-only">Mencari semua media</label>
              <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">
                  <!-- Heroicon name: solid/search -->
                  <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                  </svg>
                </div>
                <input type="text" name="search" name="mobile-search-field" id="mobile-search-field" class="h-full w-full border-transparent py-2 pl-8 pr-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400 sm:hidden" placeholder="Search Video ..." value="{{ request('search') }}">
                <input type="text" name="search" name="desktop-search-field" id="desktop-search-field" class="hidden h-full w-full border-transparent py-2 pl-8 pr-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400 sm:block" placeholder="Search Video ..."  value="{{ request('search') }}">
                <button type="submit"></button>
              </div>
            </form>
          </div>
          <div class="ml-2 flex items-center space-x-4 sm:ml-6 sm:space-x-6">
            <!-- Profile dropdown -->
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="relative inline-flex items-start mt-2 px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">
                <!-- Heroicon name: solid/plus-sm -->
                <svg class="text-gray-200 group-hover:text-gray-500 mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>  
                <span>Keluar</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </header>

    <!-- Main content Video Unggahan ------------------------------------->
    <div class="flex-1 flex items-stretch overflow-hidden">
      <main class="flex-1 overflow-y-auto">
        <div class="pt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex">
            <h1 class="flex-1 text-2xl font-bold text-gray-900">Video Panduan</h1>
            <div class="ml-6 bg-gray-100 p-0.5 rounded-lg flex items-center sm:hidden">
              <button type="button" class="p-1.5 rounded-md text-gray-400 hover:bg-white hover:shadow-sm focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Use list view</span>
              </button>
              <button type="button" class="ml-0.5 bg-white p-1.5 rounded-md shadow-sm text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <span class="sr-only">Use grid view</span>
              </button>
            </div>
          </div>

          <!-- Tabs -->
          <div class="mt-3 sm:mt-2">
            <div class="sm:hidden">
              <label for="tabs" class="sr-only">Select a tab</label>
              <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
              <select id="tabs" name="tabs" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option selected>Recently Viewed</option>
                <option>Recently Added</option>
                <option>Favorited</option>
              </select>
            </div>
            @include('admin.layouts.navbar')
          </div>

          <!-- Gallery -->
          <section class="mt-8 pb-16" aria-labelledby="gallery-heading">
            <h2 id="gallery-heading" class="sr-only">Video Unggahan</h2>
            <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 md:grid-cols-4 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
              @foreach ($video as $v)
              <li id="kons" class="relative" onclick="detailVideo({{ $v->id }})" >
                <div class="ring-2 ring-offset-2 ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden">
                  <img data-id="{{ $v->id }}" src="{{ asset('storage/' . $v->image) }}" alt="" class="object-cover pointer-events-none image">
                  <button type="button" class="absolute inset-0 focus:outline-none">
                    <span class="sr-only">Lihat detail {{ $v->judul }}</span>
                  </button>
                </div>
                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">{{ $v->judul }}</p>
              </li>

              @endforeach
            </ul>
          </section>
        </div>
      </main>

      <!-- Details sidebar -->
      <aside id="info" class="hidden w-96 bg-white p-8 border-l border-gray-200 overflow-y-auto">
        <button onclick="closeInfo()" id="btn-close" class="btn-close">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-gray-500 hover:text-gray-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>          
        </button>
        <div class="pb-16 space-y-6">
          <div>
            <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
              <img id="video-image" src="{{ asset('storage/1.jpg') }}" alt="" class="object-cover">
            </div>
            <div class="mt-4 flex items-start justify-between">
              <div>
                <h2 id="video-judul" class="text-lg font-medium text-gray-900"></h2>
              </div>
            </div>
          </div>
          <div>
            <h3 class="font-medium text-gray-900">Informasi Video</h3>
            <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
              <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Diunggah pada</dt>
                <dd id="created_at" class="text-gray-900"></dd>
              </div>

              <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Kategori</dt>
                <dd id="genre" class="text-gray-900"></dd>
              </div>
            </dl>
          </div>

          <div class="flex justify-center">
           <a id="edit" href=""><button type="button" class="flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ubah</button></a> 
           <div class="" x-data="{open :false}">
            <div class="flex justify center ml-4">
              <button @click="open = true" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" >Hapus</button>
            </div>
            <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="open">
              <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            
                <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                  <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                    <button @click="open = false" type="button" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      <span class="sr-only">Tutup</span>
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                  <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                      <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                      </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                      <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Matikan/Hapus Akun</h3>
                      <div class="mt-2">
                        <p class="text-sm text-gray-500">Apakah anda yakin ingin matikan/hapus akun? Semua data akun anda akan dihapus secara permanen. Aksi ini tidak dapat dikembalikan.</p>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                    <form id="delete" action="" method="post">
                      @csrf
                      @method('delete')
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Hapus Data</button>
                    </form>
                    <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">Batal</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</div>


@if(session()->has('success'))
<div class="" x-data="{open : true}">
  <button @click="open = true" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm invisible" >Tutup</button>
  <div id="modalID" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
        <div>
        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
            <!-- Heroicon name: outline/check -->
            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="false">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        <div class="mt-3 text-center sm:mt-5">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">{{ session('success') }}</h3>
            <div class="mt-2">
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur amet labore.</p>
            </div>
        </div>
        </div>
        <div class="mt-5 sm:mt-6">
        <button @click="open = false" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm" >Tutup</button>
        </div>
    </div>
    </div>
</div>
@endif

<script>

  // function close() {
  //   let close = document.getElementById('btn-close');
  //   let info = document.getElementById('info');

  //   close.classList.toggle('btn-close');
  // }

  function closeInfo() {
    let info = document.getElementById('info');
  info.classList.add('hidden')
}

function detailVideo(videoId) {
  let info = document.getElementById('info');
  
  
  if (info.classList.contains('hidden')) {
    info.classList.remove('hidden')
  }
    $.ajax({
        url: '/admin/books/' + videoId,
        type: 'GET',
        success: function(data) {
          document.getElementById('video-image').src = 'http://localhost:8000/storage/' + data.image
          document.getElementById('video-judul').innerHTML = data.judul
          document.getElementById('video-penulis').innerHTML = data.penulis
          document.getElementById('video-penerbit').innerHTML = data.penerbit
          document.getElementById('created_at').innerHTML = data.created_at
          document.getElementById('tahun_terbit').innerHTML = data.tahun_terbit
          document.getElementById('genre').innerHTML = data.genre
          document.getElementById('edit').href = '/admin/books/'+data.id+'/edit'
          document.getElementById('delete').action = 'admin/books/'+data.id

        }
    });
  }

</script>

<nav class="mb-10 flex items-center justify-between border-t border-gray-200 px-4 sm:px-0">
  <div class="-mt-px flex w-0 flex-1">
    <a href="#" class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
  </div>
  <div class="hidden md:-mt-px md:flex">
    <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"></a>
    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
    {{ $video->links() }}
    </a>
  </div>
</nav>





  @endsection