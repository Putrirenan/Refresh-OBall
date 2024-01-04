<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    //
    public function store(Request $request)
    {
        $user = auth()->user()->id;
        $exist = Favorite::where('user_id', $user)->where('video_id', $request->video_id)->first();


        if ($exist) {
            return back()->with('fail', 'video sudah ada dalam daftar favorit');
        } else {
            Favorite::create([
                'user_id' => $user,
                'video_id' => $request->video_id,
            ]);

            return redirect('/allbooks')->with('success', 'ditambahkan ke daftar favorit');
        }
    }

    public function destroy(Request $request, Favorite $favorite)
    {

        $user = auth()->user()->id;
        $exist = Favorite::where('user_id', $user)->where('video_id', $request->video_id)->first();


        if ($exist) {
            // video tersebut sudah ada di dalam daftar favorit
            $exist->delete();
            return redirect('/allbooks')->with('success', 'dihapus dari daftar favorit');
        } else {
            // video tersebut belum ada di dalam daftar favorit
            return back()->with('fail', 'video tidak ada dalam daftar favorit');
        }
    }
}
