<?php

namespace App\Http\Controllers;

use App\Models\Nutritionist;
use App\Models\NutritionistProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
            'phone' => 'required|string|regex:/^628[0-9]{9,}$/',
            'nik' => 'required|numeric',
            'work_experience' => 'required|numeric',
            'education' => 'required|in:sma,s1,d3,s2,s3',
            'work_place' => 'required|string|max:255',
        ]);

        $user = Nutritionist::find(auth()->user()->id);
        $userId = $user->id;
        $profile = $user->nutritionistProfile;

        if (!$profile) {
            $request->validate([
                'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'cv' => 'required|mimes:pdf|max:2048'
            ]);
            $user->is_eligible = 'pending';

            $profile = new NutritionistProfile();
        }
        $user->name = $request->name;
        $user->save();

        $profile->nutritionist_id = $userId;
        $profile->gender = $request->gender;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->phone = $request->input('phone');
        $profile->nik = $request->nik;
        $profile->work_experience = $request->work_experience;
        $profile->education = $request->education;
        $profile->work_place = $request->work_place;

        if ($request->hasFile('profile_picture')) {
            $request->validate([
                'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $image = $request->file('profile_picture');
            $resizedImage = Image::make($image);
            $imageString = (string) $resizedImage->encode();

            $imagePath = 'img/profile-nutritionist/' . time() . "_" . auth()->id() . "_profile-picture.png";
            Storage::disk('gcs')->put($imagePath, $imageString);

            $profile->profile_picture = $imagePath;
        }

        if ($request->hasFile('cv')) {
            $request->validate([
                'cv' => 'required|mimes:pdf|max:2048',
            ]);
            $cv = $request->file('cv');
            $cvPath = 'cv/' . time() . "_" . auth()->id() . "_cv.pdf";
            Storage::disk('gcs')->put($cvPath, file_get_contents($cv));

            $profile->cv = $cvPath;
        }

        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Profil berhasil disimpan!');
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'password_confirmation' => 'required|min:6'
        ], [
            'password_confirmation.min' => 'Password baru harus terdiri minimal 6 karakter.'
        ]);

        
        if ($validator->fails()) {
            return redirect()->back()->with([
                    'update_password_error' => true,
                    'alert' => 'Terjadi kesalahan!'
                ])->withErrors($validator);
        }

        if (!($request->password == $request->password_confirmation)) {
            return redirect()->back()->with([
                'update_password_error' => true,
                'alert' => 'Terjadi kesalahan!'
            ])->withErrors([
                'password' => 'Password tidak sesuai, silahkan ulangi lagi'
            ]);
        }

        Nutritionist::findOrFail(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'Berhasil memperbarui password!');
    }
}
