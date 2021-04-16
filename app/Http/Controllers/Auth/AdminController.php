<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request ,Redirect;
use App\Models\User;

class AdminController extends Controller
{
    public function Store_User (Request $request){
      $request->validate([

      ]);
      User::create([
        'name' => $request->name,
        'LastNmame' => $request->LastName,
        'UserName' => $request->UserName,
        'Sex' => $request->Sex,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'Phone' => $request->Phone,
        'dob' => $request->dob,
        'Address' => $request->Address,
        'Dr_Dep' => $request->Dr_Dep,
        'Dr_sp' => $request->Dr_sp,
        'roll' => $request->roll
      ]);
      return back()->with('User_created', 'User Created');
    }
    public Function login (Request $request) {
      $request->validate([
          'UserName' => 'required',
          'password' => 'required'
      ]);
      $credentials = $request->only('UserName', 'password');
      if (Auth::attempt($credentials)) {
          $user = auth()->user();
          if($user->roll == 1){
                return redirect()->route('Admin_Dash');
          }
          elseif($user->roll == 3){
            return redirect()->route('Doc_Dash');
          }
          elseif($user->roll == 4){
            return redirect()->route('Phar_Dash');
          }
          elseif($user->roll == 5){
            return redirect()->route('AddPa');

          }
          else{
          return redirect()->route('Lab_Dash');
          }
      }else{
          session()->flash('status', 'Invalid credentials');
          return redirect()->back();
      }
  }
  public Function logout (){
    auth()->logout();
    return Redirect::to('');
}
}
