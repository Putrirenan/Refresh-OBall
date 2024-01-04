<!-- This example requires Tailwind CSS v2.0+ -->
<?php
$user = Auth::user();
?>
<nav class="bg-[#251D3A] sticky top-0 z-20" x-data="{ open: false }">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <div class="-ml-2 mr-2 flex items-center md:hidden">
          <!-- Mobile menu button -->
          <button @click="open = ! open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white-400 hover:text-gray hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-shrink-0 flex items-center">
          <img class="h-64px w-[64px]" src="http://localhost:8000/assets/img/logo.png" alt="Logo">
        </div>
        <div class="hidden justify-center md:ml-96 pl-4 md:flex md:space-x-4">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="/" class="{{ Request::is('/') ? 'bg-white-900 text-white' : '' }} text-white hover:bg-gray-700 hover:text-blue-300 px-3 py-5 text-sm font-medium" aria-current="page">Beranda</a>

          <!-- Dropdown Panduan -------------------------------------->
          {{-- <div class="relative inline-block text-left">
            <div>
              <button type="button" class="inline-flex w-full justify-center bg-[#251D3A] text-white hover:bg-gray-700 hover:text-blue-300 px-3 py-5 text-sm font-medium" id="menu-button" aria-expanded="true" aria-haspopup="true">
                Panduan
                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            
            <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-[#251D3A] shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="py-1" role="none">
                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                <a href="/allbooks" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Teknik Dribbling</a>
                <a href="/allbooks" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Teknik Juggling</a>
                <a href="/allbooks" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Teknik Passing</a>
                <a href="/allbooks" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Teknik Shooting</a>
              </div>
            </div>
          </div> --}}
          

          <a href="/allbooks" class="{{ Request::is('allbooks') ? 'bg-white-900 text-white' : '' }} text-white hover:bg-gray-700 hover:text-blue-300 px-3 py-5 text-sm font-medium">Panduan</a>

          {{-- <a href="/categories" class="{{ Request::is('categories') ? 'bg-gray-900 text-white' : '' }} text-white hover:bg-gray-700 hover:text-blue-300 px-3 py-5 text-sm font-medium">Category</a> --}}

          <a href="/about" class="{{ Request::is('about') ? 'bg-white-900 text-white' : '' }} text-white hover:bg-gray-700 hover:text-blue-300 px-3 py-5 text-sm font-medium">Tentang Kami</a>
        </div>
      </div>
      
      <!-- Button Logout ----------------------------------------------->
      {{-- <div class="flex items-center justify-center my-auto">
        @auth
          <form action="/logout" method="post" class="pt-4">
            @csrf
            <button type="submit" class=" bg-gray-900 text-white hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
              <!-- Heroicon name: solid/plus-sm -->
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
              </svg>
              <span>Log out</span>
            </button>
          </form>
        <div class="hidden md:ml-4 md:flex-shrink-0 md:flex md:items-center">


          <!-- Profile dropdown ------------------------------------------------>
          <div class="ml-3 relative">
            <div>
              <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="btn-profile" aria-expanded="false" aria-haspopup="true" onclick="openProfile()">
                <span class="sr-only">Open user menu</span>
                @if($user->image)
                <img class="inline-block  h-10 w-10 rounded-full" src="{{ asset('storage/' . $user->image) }}" alt="">
                @else
                <img class="inline-block  h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
                @endif
              </button>
            </div>
            <div id="profile-menu" class="origin-top-right z-10 absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a href="/dashboard/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Profil Saya</a>

              <a href="/favorite" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Beranda</a>

            </div>
          </div>
        </div>
        
        <!-- Button Log In ------------------------------------------>
        @else
        <div class="flex-shrink-0">
          <a href="/login"><button type="button" class="bg-gray-600 text-white hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
            <!-- Heroicon name: solid/plus-sm -->
              <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            <span>Log In</span>
          </button></a>
        </div>
        @endauth
      </div>
    </div>
  </div> --}}

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="md:hidden" id="mobile-menu" x-show="open">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Beranda</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Panduan</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Tentang Kami</a>
    </div>
  </div>
</nav>