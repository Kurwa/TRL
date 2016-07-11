<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        if (Sentinel::check()){
            return redirect()->to('/');
        }else{
            return view('login');
        }
    }
    public function post()
    {
        try
        {
            $input = Input::all();

            $rules = [
                'username'    => 'required',
                'password' => 'required',
            ];

            $validator = Validator::make($input, $rules);

            if ($validator->fails())
            {
                return Redirect::back()
                    ->withInput()
                    ->withErrors($validator);
            }

            $remember = (bool) Input::get('remember', false);

            if (Sentinel::authenticate(Input::all(), $remember))
            {
                return Redirect::intended('/');
            }

            $errors = 'Invalid login or password.';
        }
        catch (NotActivatedException $e)
        {
            $errors = 'Account is not activated!';
            Session::flash('user',$e->getUser());
            return Redirect::to('reactivate');
        }
        catch (ThrottlingException $e)
        {
            $delay = $e->getDelay();

            $errors = "Your account is blocked for {$delay} second(s).";
        }
        catch(TokenMismatchException $e)
        {
            $errors = "Token Miss Match";
            Session::flash('error',$errors);
            return Redirect::back()->withInput();
        }
        Session::flash('error',$errors);
        return Redirect::back()->withInput();
    }
    public function logout()
    {
        $log = Sentinel::logout();
        if($log == TRUE){
            Session::flash('message','Logged Out Successful');
            return redirect('login');
        }
    }

}
