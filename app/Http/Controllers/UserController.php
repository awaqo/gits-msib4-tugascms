<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show()
    {
        $userID = Auth::user()->id;
        $data['user'] = User::find($userID);
        return view('layouts.profile.index', $data);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'profile_name' => ['required', 'string', 'max:100'],
            'profile_avatar' => ['mimes:png,jpg,jpeg']
        ]);

        $data = User::find($id);
        $checkFile = storage_path('app\public\images\profile\\'.$data->avatar);

        if($request->hasFile('profile_avatar')) {
            if(Storage::exists($checkFile)) {
                unlink(storage_path('app\public\images\profile\\'.$data->avatar));
            }
            $avatar = $request->file('profile_avatar');
            $avatar->storeAs('public/images/profile', $avatar->hashName());

            User::where('id', $id)->update([
                'name' => $validated['profile_name'],
                'avatar' => $avatar->hashName()
            ]);
        }
        else {
            User::where('id', $id)->update([
                'name' => $validated['profile_name']
            ]);
        }

        return redirect()->route('profile')->with('success', 'Berhasil mengupdate profile');
    }

}
