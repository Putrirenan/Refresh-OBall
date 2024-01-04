@extends('admin.layouts.main')
@section('container')

<div class="mx-4 my">
    <form class="space-y-8" method="post" action="/admin/books" enctype="multipart/form-data">
      @csrf
      <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5"> 
        <div>
          <div>
            <h2 class="mt-6 text-3xl text-center font-extrabold text-gray-900">Unggah Video Baru</h2>

          </div>
    
          <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="judul" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Judul </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg flex rounded-md shadow-sm">
                  <input type="text" name="judul" id="judul" autocomplete="judul" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                </div>
              </div> 
            </div>
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="deskripsi" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Deskripsi </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <textarea id="deskripsi" name="deskripsi" rows="3" class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
              </div>
            </div>
              </div>
            </div>

          <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="category_id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Category_id </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <input type="text" id="category_id" name="category_id" rows="3" class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
              </div>
            </div>
    
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="photo" class="block text-sm font-medium text-gray-700"> Photo </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="flex items-center">
                  <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                    <input type="hidden" name="oldImage">
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                  </span>
                  <input type="file" id="image" name="image" onchange="previewImage()" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 @error('image') invalod:border-red-900 @enderror">
                  @error('image')
                  <div class="invalid-feedback text-red-800 ">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <div>
                <label for="file" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Upload Video</label>
              </div>
              <div>
                <input type="file" id="file" name="video" rows="3" class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
              </div>
            </div>

          </div>
          
        </div>
      </div>
            <!-- Button -------------->
            <div class="pt-5 pb-10">
              <div class="flex justify-center">
                <a href="/admin"><button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button></a>
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