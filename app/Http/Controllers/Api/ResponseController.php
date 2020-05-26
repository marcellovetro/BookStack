<?php
namespace BookStack\Http\Controllers\Api;
use Illuminate\Http\Request;
use BookStack\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Auth;
use BookStack\User;
class ResponseController extends Controller
{
    public function sendResponse($response)
    {
        return response()->json($response, 200);
    }


    public function sendError($error, $code = 404)
    {
        $response = [
            'error' => $error,
        ];
        return response()->json($response, $code);
    }
}
