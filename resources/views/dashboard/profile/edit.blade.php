@extends('dashboard.layouts.main')

@section('container')

  <div class="mx-4">
    <form class="space-y-8" method="post" action="/dashboard/profile/{{ $user->id }}" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="m-32 space-y-8 divide-y divide-gray-200 sm:space-y-5"> 
        <div>
          <div>
            <h3 class="mt-10 text-4xl leading-6 font-medium text-black-500">Profile</h3>
            <p class="mt-3 max-w-2xl text-sm text-gray-500">This information will be displayed publicly so be careful what you share. Make sure the data that your replace is appropriate.</p>
          </div>
    
          <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Name </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg flex rounded-md shadow-sm">
                  <input type="text" name="name" id="name" autocomplete="name" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300" value="{{ $user->name }}">
                </div>
              </div>
            </div>
          <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Username </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg flex rounded-md shadow-sm">
                  <input type="text" name="username" id="username" autocomplete="username" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300" value="{{ $user->username }}">
                </div>
              </div>
            </div>
    
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> About </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <textarea id="about" name="about" rows="3" class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">{{ $user->about }}</textarea>
                <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.</p>
              </div>
            </div>
    
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="photo" class="block text-sm font-medium text-gray-700"> Photo </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="flex items-center">
                  <span class="h-24 w-24 rounded-full overflow-hidden bg-gray-100">
                    <input type="hidden" name="oldImage" value="{{ $user->image }}">
                    @if($user->image)
                    <img src="{{ asset('storage/' . $user->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                  </span>
                  <input type="file" id="image" name="image" onchange="previewImage()" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>

      <!-- Button -------------->
      <div class="pt-5">
        <div class="flex justify-center">
          <a href="/dashboard/profile"><button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button></a>
          <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Save</button>
        </div>
      </div>
    </form>
  </div>


  <script>
      function previewImage() {
        const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');
    
      imgPreview.style.display = 'block';
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }

  </script>

@endsection