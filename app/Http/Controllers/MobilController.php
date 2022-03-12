<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Service\MobilService;
use Illuminate\Http\Request;

class MobilController extends Controller
{

    public function index()
    {
        // get all mobil
        $response = (new MobilService)->getMobil();

        return response()->json(['status'=>200, 'message'=>$response],200);
    }

    public function store(Request $request)
    {
        // store new mobil to db
        $mobilData = $request->all();

        $response = (new MobilService())->storeMobil($mobilData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>201, 'message'=>'Create mobil success'],201);
    }

    public function update(Request $request)
    {
        // update mobil
        $mobilData = $request->all();

        $response = (new MobilService())->updateMobil($mobilData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>201, 'message'=>'Update mobil success'],201);
    }


    public function destroy(Request $request)
    {
        // delete mobil in db
        $mobilData = $request->id;

        $response = (new MobilService())->deleteMobil($mobilData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>201, 'message'=>'Delete mobil success'],201);;
    }

    public function buy(Request $request)
    {
        // update mobil
        $mobilData = $request->all();

        $response = (new MobilService())->buyMobil($mobilData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>201, 'message'=>'Buy 1 mobil, status change to Sold'],201);
    }
}
