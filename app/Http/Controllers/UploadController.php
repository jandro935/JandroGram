<?php

namespace App\Http\Controllers;

use App\Filters\DemoFilter;
use App\Models\Photos;
use App\Models\States;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    /**
     * Upload index view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $states = States::get();

        return view('home.upload', compact('states'));
    }

    /**
     * Upload new image.
     *
     * @param Request $request
     * @return mixed
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image',
            'description' => 'string'
        ]);

        $image = $request->file('image');

        if (!is_null($image)) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
//            Image::make($image)->resize(800, 500)->save(public_path('/img/ups/'.$imageName));
            Image::make($image)->resize(800, 500, function ($constrait) {
                $constrait->aspectRatio();
            })->filter(new DemoFilter())->save(public_path('/img/ups/'.$imageName));

            Photos::create([
                'name' => $imageName,
                'description' => $request->input('description'),
                'user_id' => auth()->user()->id,
                'state_id' => $request->input('state')
            ]);

            return Redirect::route('home');
        }
    }
}
