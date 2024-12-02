<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/login', [AuthController::class, 'login']);


Route::group(['middleware'=> ['auth:sanctum']], function(){
    Route::get('/user', function (Request $request){
        return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);

});


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('/removetoken', function(Request $request){
//     $request->user()->currentAccessToken()->delete();
 
//     return response()->json(['message'=> 'Token Revoked.', JsonResponse::HTTP_OK]);
// });

// Route::post('/tokens/create', function (Request $request) {
//     $token = $request->user()->createToken($request->token_name);
 
//     return [
//         'token' => $token->plainTextToken
//     ];
// });



