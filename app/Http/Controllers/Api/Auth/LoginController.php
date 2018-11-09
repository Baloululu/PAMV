<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\Client;
use GuzzleHttp;

class LoginController extends Controller
{
    private $client;
    private $http;

    public function __construct()
    {
        $this->client = Client::find(1);
        $this->http = new GuzzleHttp\Client;
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->get('username'))->firstOrFail();

        if ($user->isAdmin())
        {
            $scope = "admin";
        }
        else
            $scope = "";

        return $this->http->post(route('passport.token'), [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => $this->client->id,
                'client_secret' => $this->client->secret,
                'username' => $request->get('username'),
                'password' => $request->get('password'),
                'scope' => $scope
            ],
        ]);
    }

    public function logout(Request $request)
    {

        $accessToken = Auth::user()->token();

        DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update(['revoked' => true]);

        $accessToken->revoke();

        return response()->json(null, 204);
    }

    public function refresh(Request $request)
    {

        $this->validate($request, [
            'refresh_token' => "required"
        ]);

        return $this->http->post(route('passport.token'), [
            'form_params' => [
                'grant_type' => 'refresh_token',
                'refresh_token' => $request->get('refresh_token'),
                'client_id' => $this->client->id,
                'client_secret' => $this->client->secret
            ],
        ]);
    }
}
