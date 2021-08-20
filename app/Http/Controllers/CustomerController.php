<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Auth;
class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('customer_auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer_home');
    }
    // public function login()
    // {
    //     return view('customer.login');
    // }
    public function register()
    {
        return view('customer.register');
    }
    public function submit_question(Request $request) {
        $user = Auth::user();
        $record = new Question;
        $record->loom = $request->loom;
        $record->question = $request->question;
        if($request->hasFile("file")) {
            $file = $request->file('file');
            $name = time() . str_random(5) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put($name, $file);
            $record->attached_file = $name;
        }
        if($user!=null){
            $record->user_id = $user->id;
            $record->save();
            return response()->json(["status"=>"success","msg"=>"Successfully submitted"]);
        }else {

        }

    }
}
