<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;
use Auth;
use Storage;
use Carbon;

class ExpertController extends Controller
{
    public function become_expert(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $user->expert=1;
        $user->save();
        return response()->json(["status"=>"success", "user"=>$user]);
    }
}
