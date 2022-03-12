<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Service\MotorService;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function index()
    {
        // get all motor
        $response = (new MotorService)->getmotor();

        return response()->json(['status'=>200, 'message'=>$response],200);
    }

    public function store(Request $request)
    {
        // store new motor to db
        $motorData = $request->all();

        $response = (new MotorService())->storemotor($motorData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>201, 'message'=>'Create motor success'],201);
    }

    public function update(Request $request)
    {
        // update motor
        $motorData = $request->all();

        $response = (new MotorService())->updatemotor($motorData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>200, 'message'=>'Update motor success'],200);
    }


    public function destroy(Request $request)
    {
        // delete motor in db
        $motorData = $request->id;

        $response = (new MotorService())->deletemotor($motorData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>201, 'message'=>'Delete motor success'],201);;
    }

    public function buy(Request $request)
    {
        // buy function will change status to sold
        $mobilData = $request->all();

        $response = (new MotorService())->buyMotor($mobilData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>200, 'message'=>'Buy 1 mobil, status change to Sold'],200);
    }

    public function sold()
    {
        // get all sold motor
        $response = (new MotorService)->getSoldMotor();

        return response()->json(['status'=>200, 'message'=>$response],200);
    }

    public function getDetail(string $id)
    {       
        // get detail motor (laporan per kendaraan)
        $response = (new MotorService())->getSingleData($id);
        
        return $response;
    }
}
