<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CHospital;
use App\Models\CHotel;
use App\Models\CEmbassy;
use App\Models\CTrans;
use Carbon\carbon;


class NotifyController extends Controller
{
    public function index (){
        $today = Carbon::yesterday();
        $h = CHospital::whereDate('date', $today)
                        ->where('status', 1)
                        ->where('RG', auth()->user()->UserName)->get();
         return response()->json($h);     
    }
    public function Change_Status($id){
        CHospital::where('id', $id)
                   ->update(['status' => 0 ]);
        return back()->with('Em_N', 'Notification Cleared Successfully');

    }
    public function Hotel (){
        $today = Carbon::yesterday();
        $o = CHotel::whereDate('date', $today)
                        ->where('status', 1)
                        ->where('RG', auth()->user()->UserName)->get();
         return response()->json($o);     
    }
    public function Change_Hotel($id){
        CHotel::where('id', $id)
                   ->update(['status' => 0 ]);
        return back()->with('Em_N', 'Notification Cleared Successfully');

    }
    public function Embassy (){
        $today = Carbon::yesterday();
        $e = CEmbassy::whereDate('date', $today)
                        ->where('status', 1)
                        ->where('RG', auth()->user()->UserName)->get();
         return response()->json($e);     
    }
    public function Change_Embassy($id){
        CEmbassy::where('id', $id)
                   ->update(['status' => 0 ]);
        return back()->with('Em_N', 'Notification Cleared Successfully');

    }
    public function Trans (){
        $today = Carbon::yesterday();
        $t = CTrans::whereDate('date', $today)
                        ->where('status', 1)
                        ->where('RG', auth()->user()->UserName)->get();
         return response()->json($t);     
    }
    public function Change_Trans($id){
        CTrans::where('id', $id)
                   ->update(['status' => 0 ]);
        return back()->with('Em_N', 'Notification Cleared Successfully');

    }
    public Function Hospital_N (){
        $today = Carbon::yesterday();
        $Ah = CHospital::whereDate('date', $today)
                   ->where('status', '1')->get();
        return response()->json($Ah);           
    }
    public Function Hotel_N (){
        $today = Carbon::yesterday();
        $AH = CHotel::whereDate('date', $today)
                   ->where('status', '1')->get();
        return response()->json($AH);           
    }
    public Function Embassy_N (){
        $today = Carbon::yesterday();
        $AE = CEmbassy::whereDate('date', $today)
                   ->where('status', '1')->get();
        return response()->json($AE);           
    }
    public Function Trans_N (){
        $today = Carbon::yesterday();
        $AE = CTrans::whereDate('date', $today)
                   ->where('status', '1')->get();
        return response()->json($AE);           
    }
}

