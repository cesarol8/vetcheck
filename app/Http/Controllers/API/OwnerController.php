<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


CONST JSON_KEY = 'owner';

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $message = 'No data.';
        $owners = Owner::all();
        
        $code = 200;
        
        if(!$owners){
            $message = 'Success.';
        }
        return $this->apiResponseDDL(JSON_KEY,$owners,$message,$code);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $message = 'Owner created.';
        $code = 201;

        $validate = Validator::make($data,[
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255'
        ]);

        if($validate->fails()){
            return response(['error'=> $validate->errors(),'Error']);
        }

        $owner = Owner::create($data);
        

        return $this->apiResponseDML(JSON_KEY,$owner,$message,$code);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        
        $message = 'Success.';
        $code = 200;
        
        return $this->apiResponseDML(JSON_KEY,$owner,$message,$code);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        $owner->update($request->all());
        
        $message = 'Updated..';
        $code = 200;
        return $this->apiResponseDML(JSON_KEY,$owner,$message,$code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();
        return response(['message' => 'Deleted']);
    }
}
