<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $users= new UserResource(User::find($id));
        return response()->json([
            'users'=>$users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = new User;
        $users->lastname = $request->input('lastname');
        $users->firstname = $request->input('firstname');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->street = $request->input('street');
        $users->postalcode = $request->input('postalcode');
        $users->city = $request->input('city');
        $users->countrycode = $request->input('countrycode');

        $users->save();

        return response()->json([
            'users'=>$users
        ]);
    }




    /**
     * Update the specified resource in storage.
     */
    public function update($id, UserRequest $request)
    {

        $users=User::find($id);
        $users->update($request->safe()->except('email'));
        $users->save();
        return response()->json([
            'users'=>$users
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return response()->json([
            'users'=>$this->index()
        ]);
    }
}
