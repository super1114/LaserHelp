<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Auth;
use Storage;
use Carbon;

class QuestionController extends Controller
{
    //

    public function submit_question(Request $request) {
        $loom = $request->loom;
        $question = $request->question;
        $record = new Question;
        $record->loom = $loom;
        $record->question = $question;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $name = time() . str_random(5) . '.' . $file->getClientOriginalExtension();
            $request->file('file')->storeAs(
                'public', $name, 
            );
            $record->attached_file = $name;
        }
        if(Auth::user()){
            $record->user_id = $user->id;
            $record->save();
            return response()->json(["status"=>"success","msg"=>"Successfully submitted", "user_id"=>$user->id, "question_id"=>$record->id]);
        } else {
            $record->save();
            return response()->json(["status"=>"success","msg"=>"Successfully submitted", "user_id"=>"0", "question_id"=>$record->id]);
        }
    }
}