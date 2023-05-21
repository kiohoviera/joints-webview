<?php

namespace App\Http\Controllers;

use App\Models\Detection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function index()
    {

        $data['detection'] = Detection::latest()->get();



        return view('welcome', $data);
    }

    public function sendData(Request $request)
    {

        try {

            $max_angle = DB::table('detections')
                ->where('reference', $request->post('reference'))
                ->max('angle');

            $min_angle = Detection::where('reference', $request->post('reference'))
                ->latest()
                ->min('angle');

            $angle = $request->post('angle');

            if ($angle > $max_angle){
                $max_angle = $angle;
            }

            if ($angle < $min_angle) {
                $min_angle = $angle;
            }

            $request->merge([
                'min_angle' => $min_angle,
                'max_angle' => $max_angle
            ]);

            $detection = Detection::create($request->all());

            return $detection->id;
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function getData()
    {


        $detect = Detection::latest()->first();

        return response()->json($detect);
    }
}
