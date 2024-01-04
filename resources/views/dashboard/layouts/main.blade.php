<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
  

  <div class="flex min-h-full" x-data="{ open: false }">
    <div 
    x-transition:enter="transition-opacity ease-linear duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity ease-linear duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    x-show="open" class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>
  
    @include('dashboard.layouts.sidebar')
  
    <div class="flex w-0 flex-1 flex-col lg:pl-64">
      <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 border-b border-gray-200 bg-white">
        <button @click="open = true" type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-900 lg:hidden">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: outline/bars-3-bottom-left -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
          </svg>
        </button>
        <div class="flex flex-1 justify-between px-4">
          <div class="flex items-center">
            <nav class="flex" aria-label="Breadcrumb">
              <ol role="list" class="flex items-center space-x-4">
                <li>
                  <div>
                    <a href="/" class="text-gray-400 hover:text-gray-500">
                      <!-- Heroicon name: mini/home -->
                      <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                      </svg>
                      <span class="sr-only">Home</span>
                    </a>
                  </div>
                </li>
              </ol>
            </nav>
          </div>
          <div class="flex mt-4 items-center">
            <form action="/logout" method="post">
            @csrf
            <button type="submit" class="rounded-md border border-transparent bg-[#8B7E74] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-amber-800 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">Logout</button>
            </form>
          </div>
        </div>
      </div>
  
      <!-- main -->
      <main class="flex-1">
        <div class="">
  
          @yield('container')
  
        </div>
      </main>
    </div>
  </div>

  
<script src="../path/to/flowbite/dist/flowbite.js"></script>
<script defer src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>
</html>