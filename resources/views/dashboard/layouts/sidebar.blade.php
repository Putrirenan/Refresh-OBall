<div
x-transition:enter="transition ease-in-out duration-300 transform"
x-transition:enter-start="-translate-x-full"
x-transition:enter-end="translate-x-0"
x-transition:leave="transition ease-in-out duration-300 transform"
x-transition:leave-start="translate-x-0"
x-transition:leave-end="-translate-x-full"
  class="fixed inset-0 z-40 flex">
  <div class="relative flex w-full max-w-xs flex-1 flex-col bg-gray-800 pt-5 pb-4">
    <div class="absolute top-0 right-0 -mr-12 pt-2">
      <button @click="open = false" type="button" class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
        <span class="sr-only">Close sidebar</span>
        <!-- Heroicon name: outline/x-mark -->
        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="flex flex-shrink-0 items-center px-4">
      <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=rose&shade=500" alt="Your Company">
    </div>
    <div class="mt-5 h-0 flex-1 overflow-y-auto">
      <nav class="px-2">
        <div class="space-y-1">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="#" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md" aria-current="page">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
            Profile
          </a>

          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/bars-4 -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>Favorite
          </a>
        </div>
      </nav>
    </div>
  </div>

  <div class="w-14 flex-shrink-0" aria-hidden="true">
    <!-- Dummy element to force sidebar to shrink to fit close icon -->
  </div>
</div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64">
<!-- Sidebar component, swap this element with another sidebar if you like -->
<div class="flex min-h-0 flex-1 flex-col">
  <div class="flex justify-center h-16 flex-shrink-0 items-center bg-[#8B7E74] px-4">
    <img class="h-14 w-auto" src="{{ asset('assets/logo.png') }}" alt="Your Company">
  </div>
  <div class="flex flex-1 flex-col overflow-y-auto bg-[#8B7E74]">
    <nav class="flex-1 px-2 py-4">
      <div class="space-y-1">
        <a href="/dashboard/profile" class="{{ Route::is('profile.index') ? 'bg-gray-700 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}" aria-current="page">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
          Profile
        </a>

        <a href="/favorite" class="{{ Route::is('favorite.index') ? 'bg-gray-700 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <!-- Heroicon name: outline/bars-4 -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
          </svg>
          
          Favorites
        </a>
      </div>
    </nav>
  </div>
</div>
</div>