<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DeleteAccountController extends Controller
{
    //
    public function destroy(Request $request, User $user)
    {
        $user = Auth::user();
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        if ($user->image) {
            Storage::delete($user->image);
        }
        User::destroy($user->id);
        return redirect('/modal')->with('success', 'Account has been deleted');
    }
}
