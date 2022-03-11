<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function view(StoreRoleRequest $request)
   {
      return view('login.login');
   }

   public function storeLogin(StoreRoleRequest $request)
   {
      $cekUser = User::where('user_username', $request->username)->first();

      /* Cek Password */
      if (!$cekUser || !Hash::check($request->password, $cekUser->user_password)) {
         return back()->with('error', 'Email / Password Salah');
      }

      Auth::login($cekUser);
      return redirect()->intended(RouteServiceProvider::HOME);
   }
}
