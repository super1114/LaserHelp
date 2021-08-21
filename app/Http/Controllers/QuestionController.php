<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Auth;
use Storage;
use Carbon;
class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function my_questions(){
        // $user = Auth::user();
        // $diff = $user->created_at->diffForHumans(Carbon\Carbon::now(), false);
        // dd($diff);
        $user_id = Auth::user()->id;
        $questions = Question::orderBy('created_at', "desc")->get();
        // dd($questions);
        return view("my_questions", ["questions"=>$questions]);
    }
    public function download_attach($question_id) {
        $question = Question::find($question_id);
        return Storage::disk("public")->download($question->attached_file);
    }
    
}
