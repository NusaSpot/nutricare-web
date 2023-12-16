<?php

namespace App\Http\Controllers;

use App\Models\NutritionistActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ActivityController extends Controller
{
    public function index(){
        if(auth()->user()->is_eligible != 'approved'){
            return redirect()->back();
        }

        $data['activities'] = NutritionistActivity::where('nutritionist_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();
        return view('activity.index', $data);
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $date = $request->date;

        $activity = new NutritionistActivity();
        $activity->nutritionist_id = auth()->user()->id;
        $activity->title = $title;
        $activity->date = $date;

        $proof1 = $request->file('proof_1');
        $resizedImageProof1 = Image::make($proof1);
        $imageStringProof1 = (string) $resizedImageProof1->encode();
        $imagePathProof1 = 'img/proof/' . time() . "_" . uniqid(10) . "_proof1.png";
        Storage::disk('gcs')->put($imagePathProof1, $imageStringProof1);

        $activity->proof_1 = $imagePathProof1;

        if($request->hasFile('proof_2')){
            $proof2 = $request->file('proof_2');
            $resizedImageProof2 = Image::make($proof2);
            $imageStringProof2 = (string) $resizedImageProof2->encode();
            $imagePathProof2 = 'img/proof/' . time() . "_" . uniqid(10) . "_proof2.png";
            Storage::disk('gcs')->put($imagePathProof2, $imageStringProof2);

            $activity->proof_2 = $imagePathProof2;
        }

        if($request->hasFile('proof_3')){
            $proof3 = $request->file('proof_3');
            $resizedImageProof3 = Image::make($proof3);
            $imageStringProof3 = (string) $resizedImageProof3->encode();
            $imagePathProof3 = 'img/proof/' . time() . "_" . uniqid(10) . "_proof3.png";
            Storage::disk('gcs')->put($imagePathProof3, $imageStringProof3);

            $activity->proof_3 = $imagePathProof3;
        }

        $activity->save();

        return redirect()->back()->with('success', 'Aktivitas berhasil terinput !');
    }

    public function detail($activityId)
    {
        $data['activity'] = NutritionistActivity::find($activityId);
        return view('activity.detail', $data);
    }

    public function delete($activityId)
    {
        $data['activity'] = NutritionistActivity::find($activityId)->delete();
        return redirect()->back()->with('success', 'Aktivitas berhasil dihapus !');
    }
}
