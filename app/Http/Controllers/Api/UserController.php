<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Rfc4122\UuidV7;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $adduser = new User();
        $adduser->id = UuidV7::uuid7();
        $adduser->name = $request->name;
        $adduser->email = $request->email;
        $adduser->password = Hash::make($request->password);
        $adduser->save();

        return response()->json("Usuario cadastrado com sucesso !");

    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $id)
    {
        if ($request->name == "") { $id->name = $id->name;} else {$id->name = $request->name;}
        if ($request->email == "") { $id->email = $id->email;} else { $id->email = $request->email;}
        if ($request->password == "") { $id->password = $id->password; } else { $id->password = Hash::make($request->password);}
        
        $id->save();

        return response()->json("Usuario atualizado com sucesso !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        $id->delete();

        return response()->json("Usuario deletado com sucesso !");
    }
}
