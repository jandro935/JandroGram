<?php

namespace App\Http\Controllers;

use App\Models\Photos;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

//    public function proof()
//    {
//        States::insert([
//            [   'name' => 'Viajes',
//                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//            ],
//            [   'name' => 'Compras',
//                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//            ],
//            [   'name' => 'Trabajo',
//                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//            ],
//            [   'name' => 'Casa',
//                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//            ],
//            [   'name' => 'Calle',
//                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//            ],
//            [   'name' => 'Familia',
//                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//            ],
//            [   'name' => 'Amigos',
//                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//            ],
//            [   'name' => 'Estudios',
//                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//            ],
//
//        ]);
//
//        return 'OK';
//    }
}
