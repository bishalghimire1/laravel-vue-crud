<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function create(Request $request){
        try{

            $data=Flight::create($request->all());
        }
        catch(\Exception $e){
            throw ($e);
        }
        return response()->json(['data'=>$data,'message'=>'success']);
    }

    public function getFlight(){
        $data = Flight::all();
        return response()->json(['data'=>$data]);

    }

    public function deleteFlight(Request $request,$id){
            $data=Flight::where('id',$id)->delete();
        return response()->json(['data'=>'deleted']);
           
            
    }

    public function getUser(Request $request,$id){
        $data=Flight::where('id',$id)->get();
        return response()->json($data);
    }

    public function updateFlight(Request $request,$id){

        $data=Flight::where('id',$id)->update(['name'=>$request['name'],'emali'=>$request['email'],'address'=>$request['address']]);
        return response('successfully updated');
        

    }

}
