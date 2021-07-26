<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Resources\VetCheckResource;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function apiResponseDDL($key,$collection,$message,$code){

        return response([$key=>VetCheckResource::collection($collection),'message'=>$message,'code'=>$code]);
    }

    public function apiResponseDML($key,$collection,$message,$code){

        return response([$key=> new VetCheckResource($collection),'message'=>$message,'code'=>$code]);
    }
}
