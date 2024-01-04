@extends('dashboard.layouts.main')

@section('container')
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-10 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="md:flex md:items-center md:justify-between">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Favorites Books</h2>
    </div>

    <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
      @foreach ($favorite as $f)
        @if (Auth::id() == $f->user->id)
          <div class="group relative mt-3">
            <div class="aspect-w-4 aspect-h-5 overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
              <img src="{{ asset('/storage/' . $f->video->image) }}" alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-4 text-sm font-medium text-gray-700">
              <a href="#">
                <span class="absolute inset-0"></span>
                {{ $f->video->judul }}
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{ $f->video->category->name }}</p>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</div>




<nav class="mb-10 flex items-center justify-between border-t border-gray-200 px-4 sm:px-0">
  <div class="-mt-px flex w-0 flex-1">
    <a href="#" class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
  </div>
  <div class="hidden md:-mt-px md:flex">
    <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"></a>
    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
    {{ $favorite->links() }}
    </a>
  </div>
</nav>
@endsection