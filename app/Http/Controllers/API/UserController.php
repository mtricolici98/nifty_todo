<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{

    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], 200);
    }

}
