<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Auth;
use Storage;
class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function my_questions(){
        $user_id = Auth::user()->id;
        $questions = Question::get();
        // dd($questions);
        return view("my_questions", ["questions"=>$questions]);
    }
    
}
