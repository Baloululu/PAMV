<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FcmController extends Controller
{
    public function fcm(Request $token)
    {
        if ($token->has('fcm_token'))
        {
            Auth::user()->update(['fcm_token' => $token->get('fcm_token')]);
            return response()->json(['success' => 'fcm token update'], 200);
        }
        else
            return response()->json(['error' => 'fcm_token field is requiered'], 422);
    }
}
