@extends('dashboard.layouts.main')

@section('container')
<div class="">
  <div class="m-32 mt-12"  >
    <div class="mt-10">
      <h1 class="leading-6 font-medium text-pink-500">Account Setting</h1>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">This section will be deleting your account and make it becomes inactive so be careful if you want to keep your account active.</p>
    </div>
    <div class="" x-data="{open :false}">
      <div class="flex justify-start mt-4">
        <button @click="open = true" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500" >Delete account</button>
      </div>
      <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="open">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      
          <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      
          <!-- This element is to trick the browser into centering the modal contents. -->
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      
          <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
              <button @click="open = false" type="button" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="sr-only">Close</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="sm:flex sm:items-start">
              <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                <!-- Heroicon name: outline/exclamation -->
                <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
              </div>
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Deactivate account</h3>
                <div class="mt-2">
                  <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will be permanently removed from our servers forever. This action cannot be undone.</p>
                </div>
              </div>
            </div>
            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
              <form action="{{ route('delete-account') }}" method="post">
                @csrf
                @method('delete')
              <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Deactivate</button>
              </form>
              <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <form class="space-y-8" method="post" action="{{ route('change.password') }}">
      @csrf
      <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5"> 
        <div>
          <h2 class=" leading-6 font-medium">Reset Password</h2>
          <p class="mt-1 max-w-2xl text-sm text-gray-500">This section will be changed your password if you forget it and want to reset the password, just make the new one and confirm it.</p>
          <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="oldpassword" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 "> Old Password </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg flex rounded-md shadow-sm">
                  <input type="password" name="current_password" id="oldpassword" autocomplete="oldpassword" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300 @error('current_password') invalid:border-red-900 @enderror">
                </div>
                @error('current_password')
                <div class="invalid-feedback text-red-800 ">
                  {{ $message }}
                </div>
              @enderror
              </div>
            </div>
          <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="newpassword" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">New Password </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg flex rounded-md shadow-sm">
                  <input type="password" name="new_password" id="newpassword" autocomplete="newpassword" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300 @error('new_password') invalid:border-red-900 @enderror">
                  
                </div>
                @error('new_password')
                <div class="invalid-feedback text-red-800 ">
                  {{ $message }}
                </div>
              @enderror
              </div>
            </div>
  
          </div>
                  <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="confirm-password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Confirm Password </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg flex rounded-md shadow-sm">
                  <input type="password" name="new_confirm_password" id="confirm-password" autocomplete="confirm-password" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300 @error('new_confirm_password') invalid:border-red-900 @enderror">
                </div>
                @error('new_confirm_password')
                <div class="invalid-feedback text-red-800 ">
                  {{ $message }}
                </div>
              @enderror
              </div>
            </div>
          </div>
        </div>
      </div>
    
    
      <div class="pt-5">
        <div class="flex justify-center">
          <a  href="/dashboard/profile"><button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button></a>
          <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
          

          
              </div>

  
        </div>
      </div>
    </form>
    
    <!-- This example requires Tailwind CSS v2.0+ -->

  </div>
  

</div>



@if(session()->has('success'))
<div class="" x-data="{open : true}">
  <button @click="open = true" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm invisible" >Close</button>
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
        <button @click="open = false" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm" >Close</button>
        </div>
    </div>
    </div>
</div>
@endif




  @endsection