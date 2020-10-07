<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Tracking;
use Illuminate\Support\Facades\Input;
class TrackingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tracking(Request $request)
    {

// dd($request);

            $q = $request->search;

            // $peoples = People::where('tracking_id','=', $q)->get();
            $person = People::with('trackings')->where('tracking_id','=', $q)->first();
            $peoples = People::with('trackings')->where('tracking_id','=', $q)->get();
            // dd($person);
            if(count($peoples) > 0)

            return view('tracking',compact('person'))->with('peoples', $peoples);

                // return view('home', compact('peoples'))->withDetails($peoples)->withQuery ( $q );
            else

            return view ('wrong')->withMessage('No Details found. Try to search again !');



    }
}
