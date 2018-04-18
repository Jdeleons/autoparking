<?php

namespace App\Http\Controllers;

use App\User_Parking;
use Illuminate\Http\Request;

class UserParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userParking = User_Parking::all();
		  return $userParking;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userParking = User_Parking::create($request->all());
		  return $userParking;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User_Parking  $user_Parking
     * @return \Illuminate\Http\Response
     */
    public function show(User_Parking $userParking)
    {
        $userParking = User_Parking::find($userParking);
		  return $userParking;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User_Parking  $user_Parking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_Parking $userParking)
    {
        $userParking->update($request->all());
		  return response()->json($userParking, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User_Parking  $user_Parking
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_Parking $userParking)
    {
        $userParking->delete();
		  return response()->json(null, 204);
    }
}
