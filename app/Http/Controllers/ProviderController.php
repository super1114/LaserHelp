<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Question;
class ProviderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('provider_home');
    }
    public function become_expert()
    {
        $this->middleware("auth");
        $user = Auth::user();
        $user->user_type = 2;
        $user->save();
        return redirect(route("get_clients"));
    }
    public function get_clients()
    {
        $questions = Question::orderBy("created_at", "desc")->get();
        return view("get_clients", ["questions"=>$questions]);
    }
}
