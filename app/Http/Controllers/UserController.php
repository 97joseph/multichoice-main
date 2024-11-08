<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // Check if the user with the given username exists and is active
        $user = User::query()->where('username', $request['username'])->first();

        if (!$user) {
            Session::flash('error', 'No user with the provided credentials.');
            return back()->onlyInput('username');
        }
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user =[
                'user' =>$user
            ];
           // return view('admin.dashboard')->with($user);
           return redirect()->route('dashboard')->with($user);

        }
        Session::flash('error', 'Username or password is incorrect.');
        return back()->onlyInput('username');
    }

    public function register(Request $request){
        #return $request->all();
        try {

            $user = new User();
            $user['name'] = $request['name'];
            $user['username'] = $request['username'];
            $user['password'] = bcrypt($request['password']);

            $user->save();

            Session::flash("success", "Operator Account created successfully. You can now login.");
            return redirect('/login');
        } catch (QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                Session::flash("error", "The email address has already been used to register for an account. Please choose a different one.");
                return redirect()->back()->withInput();
            }
            Session::flash("error", "System Error! Kindly try again.");
            Session::flash("error", $e->getMessage());
            Log::error($e->getMessage());
            return redirect()->back()->withInput();
        } catch (\Exception $e){
            Session::flash("error", "System Error! Kindly try again.");
            Session::flash("error", $e->getMessage());
            Log::error($e->getMessage());
            return redirect()->back()->withInput();
        }
    }

}
