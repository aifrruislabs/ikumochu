<?php

namespace App\Http\Controllers;

use App\Models\Dataset;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    //postLogin
    public function postLogin(Request $request)
    {
        //Input Validation
        $this->validate($request,
            [
                'email' => 'required',
                'password' => 'required'
            ]);

        $email = $request->email;
        $password = $request->password;

        $credentials = array(
            'email' => $email,
            'password' => $password,
        );
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $message = "You Have Been Authenticated Successfully.";
            return redirect()->intended('dashboard')->with(['successMessage' => $message]);
        }else {
            $message = "Please Enter Correct Username & Password Combination";
            return redirect()->back()->with(['errorMessage' => $message]);
        }
    }

    //Login
    public function login()
    {
        return view("account.login");
    }

    //postLogout
    public function postLogout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    //Datasets
    public function datasets()
    {
        $datasets = Dataset::orderBy('created_at', 'DESC')->get();

        return view("pages.datasets", [
            'datasets' => $datasets
        ]);
    }

    //Dataset Contexts
    public function dataset_contexts()
    {
        return view("pages.dataset_contexts");
    }

    //Process Dataset
    public function process_dataset()
    {
        return view("pages.process_dataset");
    }

    //Dashboard
    public function dashboard()
    {
        return view("dashboard");
    }

    //Index
    public function index()
    {
        return view("index");
    }
}
