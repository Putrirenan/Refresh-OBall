<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Category;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (request('category')) {
            $category = Category::firstWhere('name', request('category'));
        }


        return view('books', [
            'video' => Video::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.books.create', [
            'video' => Video::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(StoreVideoRequest $request)
    {
        
        //pdf
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required',
            'file' => 'file|mimes:pdf|max:10240|nullable',
            'category_id' => 'required',
        ]);

        $file = $request->file('file');



        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('video-images');
        }
        if ($file) {
            $filename = uniqid() . '.' . $file->extension();
            $validatedData['file'] = $file->storeAs('pdfs', $filename);
        }

        Video::create($validatedData);

        return redirect('/admin')->with('success', 'new video have been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video, $id)
    {
        //
        $video = Video::find($id);
        return $video;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video, $id)
    {
        //
        $video = Video::find($id);
        return view('admin.books.edit', [
            'video' => $video
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoRequest  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideoRequest $request, Video $video, $id)
    {
        //
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required',
            'file' => 'file|mimes:pdf|max:10240|nullable',
            'category_id' => 'required',
        ]);

        $file = $request->file('file');

        if ($file) {
            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $filename = uniqid() . '.' . $file->extension();
            $validatedData['file'] = $file->storeAs('pdfs', $filename);
        }

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('video-images');
        }
        Video::find($id)->update($validatedData);
        return redirect('/admin')->with('success', ' data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video, $id)
    {
        $video = Video::find($id);

        if ($video->image) {
            Storage::delete($video->image);
        }
        Video::destroy($video->id);
        return back()->with('success', 'Data has been deleted');
    }

    public function getVideo(Video $video, $id)
    {
        $video = Video::find($id);
        return $video;
    }
}
