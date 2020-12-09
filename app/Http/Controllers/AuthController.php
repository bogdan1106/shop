<?php

namespace App\Http\Controllers;

use App\Mail\PasswordRecoveryMail;
use App\Mail\UserConfirmMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function registerForm()
    {
        return view('authorization.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required| email|unique:users',
            'password' => 'required',
        ]);

        $user = User::add($request);
        Mail::to('dorwo@yandex.ua')->send(new UserConfirmMail($user));

        return redirect('/');
    }

    public function loginForm()
    {
        return view('authorization.login');
    }

    public function login(Request $request)
    {
        $request->validate([
           'email' => 'required',
           'password' => 'required',
        ]);

        $credendials = [
            'email' => $request->email,
            'password' => $request->password,
            'active' => 1,
        ];
       if( auth()->attempt($credendials)) return redirect(route('index'));
       else return back()->with('success', 'Неверный логин или пароль');
      }


      public function logout()
      {
          if(auth()->user()) auth()->logout();

          return back();
      }


      public function confirm($id, $code)
      {
          $user = User::find($id);

          if($code == $user->activation_code){
              $user->active = 1;
              if($user->save()) auth()->loginUsingId($id);

              return redirect(route('index'));
          }
      }


    public function forgotPassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if($user) {
            $user->updateSecretCode();
            Mail::to($user->email)->send( new PasswordRecoveryMail($user));
            return back()->with('success', 'Проверте Вашу почту для продолженя смены пароля');
        }
        return back()->with('error', 'неверный имейл');

    }


    public function passwordChangeForm($id, $code)
    {

        $user = User::whereId($id)->firstOrFail();
        session()->put('email', $user->email);
        if($user->activation_code == $code) return view('authorization.set-new-password');
        else return abort(404);
    }

    public function passwordChange(Request $request)
    {
        $request->validate([
            'email' => 'requiered',
        ]);

        $user = User::whereEmail(session('email'))->firstOrFail();
        if($user) {
            $user->changePassword($request->password);
            auth()->loginUsingId($user->id);
            return back()->with('success', 'Пароль успешно изменен');

        }
        else return 'user not found by email in session';

    }



}
