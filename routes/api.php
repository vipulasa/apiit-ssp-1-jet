<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    });

Route::post('/mobile-login', function (Request $request) {
    // validate the request and check if a name, email, mobile number exists
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // check if the user already exists
    $user = \App\Models\User::where('email', $request->email)
        ->first();

    // if the user does not exist, return an error
    if (!$user) {
        return response()->json([
            'message' => 'User does not exist'
        ], 404);
    }

    // if the user exists, check if the password is correct
    if (!\Illuminate\Support\Facades\Hash::check($request->password, $user->password)) {
        return response()->json([
            'message' => 'Password is incorrect'
        ], 401);
    }

    // delete all tokens for the user
    // THIS IS NOT MANDATORY
    // $user->tokens()->delete();

    // create a token for the user
    $token = $user->createToken('iphone')->plainTextToken;

    // return the user and the token
    return [
        'user' => $user,
        'token' => $token
    ];
});

// curl --location 'http://localhost:8000/api/mobile-register' \
// --header 'Content-Type: application/json' \
// --data-raw '{
//     "name": "John Doe",
//     "email" : "john1@doe.com",
//     "password" : "john",
//     "mobile_number" : 123456778
// }'

Route::post('/mobile-register', function (Request $request) {

    // validate the request and check if a name, email, mobile number exists
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'mobile_number' => 'required'
    ]);

    // check if the user already exists
    $user = \App\Models\User::where('email', $request->email)
        ->orWhere('mobile_number', $request->mobile_number)
        ->first();

    // if the user exists, return the user
    if ($user) {
        return $user;
    }

    // if the user does not exist, create a new user
    $user = \App\Models\User::create([
        'name' => $request->name,
        'email' => $request->email,
        'mobile_number' => $request->mobile_number,
        'password' => \Illuminate\Support\Facades\Hash::make($request->password)
    ]);

    // create a token for the user
    $token = $user->createToken('mobile')->plainTextToken;

    // return the user and the token
    return [
        'user' => $user,
        'token' => $token
    ];
});
