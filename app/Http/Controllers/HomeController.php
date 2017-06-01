<?php

namespace App\Http\Controllers;

use App\Models\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photos::get();

        return view('home.content', compact('photos'));
    }

    public function upload(Request $request)
    {
//        $this->validate($request, [
//            'image' => 'required|image',
//            'description' => 'string'
//        ]);
//
        $image = $request->file('image');

        if (!is_null($image)) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(800, 500)->save(public_path('/img/ups/'.$imageName));

            Photos::create([
                'name' => $imageName,
                'description' => $request->input('description'),
                'user_id' => auth()->user()->id
            ]);

            return Redirect::route('home');
        }
    }
}
