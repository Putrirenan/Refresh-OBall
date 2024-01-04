@extends('dashboard.layouts.main')

@include('dashboard.layouts.sidebar')

@section('container')


  @if(session()->has('success'))
  <div class="alert alert-success col-lg-9" role="alert">
    {{ session('success') }}
  </div>
  @endif
  
<form class="space-y-8  divide-gray-200" action="/profile">
  @csrf
<div class="">
  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="bg-white">
    <div class="mt-10 ml-10 text-left">
      <div class="space-y-12">
        <div class="space-y-5 ">
          <h2 class="divide-y divide-gray-200 text-3xl font-extrabold tracking-tight sm:text-4xl ml-20">Profile</h2>
        </div>
        <ul role="list" class="flex flex-start ml-10">
          <li>
            <div class="space-y-6">
              @if($user->image)
              <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="{{ asset('storage/' . $user->image) }}" alt="">
              @else
              <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
              @endif
            </div>
          </li>

          <!-- Description list with inline editing -->
          <div class="divide-y divide-gray-200 ml-16">
            <div class="space-y-1">
              <h3 class="text-lg leading-6 font-medium text-gray-900">Profile</h3>
              <p class="max-w-2xl text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
            </div>
            <div class="mt-6">
              <dl class="divide-y divide-gray-200">
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                  <dt class="text-sm font-medium text-gray-500">Username</dt>
                  <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span class="flex-grow">{{ $user->name }}</span>
                  </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                  <dt class="text-sm font-medium text-gray-500">About</dt>
                  <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span class="flex-grow">{{ $user->about }}</span>
                  </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                  <dt class="text-sm font-medium text-gray-500">Email</dt>
                  <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span class="flex-grow">{{ $user->email }}</span>
                    </span>
                  </dd>
                </div>
              </dl>
            </div>

            <!-- Section Setting Profile ------------------>
            <div class="flex justify-end items-center">
              <a href="/dashboard/profile/{{ $user->id }}/edit">
                <button type="button" class="bg-white py-2 mt-3 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit</button>     
              </a>
              <a href="setting/change-password">
              <button type="button" class="ml-3 mt-3 inline-flex justify-center py-2 px-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </button>
            </a>
            </div>
          </div>   
        </ul>
      </div>
    </div>
  </div>
  

@endsection