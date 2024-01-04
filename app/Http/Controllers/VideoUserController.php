<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Favorite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class VideoUserController extends Controller
{
    //
    public function index()
    {
        // code to handle request to the index page

    }

    public function show(Video $video, $id)
    {
        $userId = auth()->id();
        $video = Video::find($id);
        $ids = DB::table('favorites')->where('user_id', $userId)->select('video_id')->pluck('video_id')->toArray();
        $array = implode(',', $ids);
        $selected = explode(',', $array);
        $collect = collect($selected);

        $b = [];
        $bu = Video::all();
        foreach ($bu as $bi) {
            $b[] = $collect->contains($bi->id);
            // dd($b);
        }



        // return view('component.show', [
        //     'video' => $video,
        //     'isFavorited' => $isFavorited
        // ]);
        // return compact('video', 'isFavorited');
        return $video;
        // code to handle request to show a specific resource
    }
    public function download(Video $video, $id)
    {

        $video = Video::find($id);
        //PDF file is stored under project/public/storage/info.pdf
        $file = public_path() . "/storage/$video->file";

        $headers = array(
            'Content-Type: application/pdf',
        );

        $file_name = basename($file);

        return Response::download($file, $file_name, $headers);
    }
}
