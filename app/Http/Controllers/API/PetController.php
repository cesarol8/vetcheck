<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

CONST JSON_KEY = 'pet';

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $message = 'No data.';
        $pets = Pet::all();
        
        $code = 200;
        
        if(!$pets){
            $message = 'Success.';
        }
        return $this->apiResponseDDL(JSON_KEY,$pets,$message,$code);
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
        $message = 'Pet created.';
        $code = 201;

        $validate = Validator::make($data,[
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'date_of_birth' => 'required|max:255',
            'owner_id' => 'required|max:255|exists:owners,id',
            'photo' => 'required|max:255'
        ]);

        if($validate->fails()){
            return response(['error'=> $validate->errors(),'Error']);
        }

        $pet = Pet::create($data);
        

        return $this->apiResponseDML(JSON_KEY,$pet,$message,$code);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        
        $message = 'Success.';
        $code = 200;
        
        return $this->apiResponseDML(JSON_KEY,$pet,$message,$code);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $pet->update($request->all());
        
        $message = 'Updated..';
        $code = 200;
        return $this->apiResponseDML(JSON_KEY,$pet,$message,$code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(pet $pet)
    {
        $pet->delete();
        return response(['message' => 'Deleted']);
    }
}
