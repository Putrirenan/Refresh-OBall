<div class="hidden sm:block">
    <div class="flex items-center border-b border-gray-200">
      <nav class="flex-1 -mb-px flex space-x-6 xl:space-x-8" aria-label="Tabs">
        <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
        <a href="/admin" aria-current="page" class="{{ Request::is('admin') ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500' }} whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Daftar Video </a>

        <a href="/admin/category" class="{{ Request::is('admin/category') ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500' }} hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Kategori </a>

      </nav>
      <div class="hidden ml-6 p-0.5 rounded-lg items-center sm:flex">
        <a href="admin/books/create" class="ml-0.5 p-1.5 rounded-md shadow-sm text-[#8B7E74] hover:text-amber-800">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
          </svg>                    
          <span class="sr-only">Use grid view</span>
        </a>
      </div>
    </div>
  </div>