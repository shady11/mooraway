<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateEgeRequest;
use App\Http\Requests\ProfileUpdateEmailRequest;
use App\Http\Requests\ProfileUpdateNameRequest;
use App\Http\Requests\ProfileUpdatePhoneRequest;
use App\Http\Requests\ProfileUpdatePhotoRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

/**
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * @param ProfileUpdateNameRequest $request
     */
    public function updateName(ProfileUpdateNameRequest $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->save();
    }

    /**
     * @param ProfileUpdateEmailRequest $request
     */
    public function updateEmail(ProfileUpdateEmailRequest $request)
    {
        $user = Auth::user();
        $user->email = $request->input('email');
        $user->save();
    }

    /**
     * @param ProfileUpdateEgeRequest $request
     */
    public function updateAge(ProfileUpdateEgeRequest $request)
    {
        $user = Auth::user();
        $user->age = $request->input('age');
        $user->save();
    }


    /**
     * @param ProfileUpdatePhoneRequest $request
     */
    public function updatePhone(ProfileUpdatePhoneRequest $request)
    {
        $user = Auth::user();
        $user->phone = $request->input('phone');
        $user->save();
    }

    /**
     * @param ProfileUpdatePhotoRequest $request
     */
    public function photo(ProfileUpdatePhotoRequest $request)
    {
        $user = Auth::user();

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/uploads/', $imageName);
            Image::make(public_path() . '/uploads/' . $imageName)
                ->fit(250)
                ->save();
            $user->avatar = $imageName;
        }

        $user->save();

        return response()->json(['avatar' => '/uploads/' . $user->avatar]);
    }
}
