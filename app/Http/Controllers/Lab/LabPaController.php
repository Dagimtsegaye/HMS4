<?php

namespace App\Http\Controllers\Lab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lab_Pa;
use App\Models\Vister;


class LabPaController extends Controller
{
public function DashBord (){
    return view('Lab.DashBord'); 
}
public function viewPa (){
    $Pa = Vister::select('fname', 'C_number','Lab_test', 'sex', 'mname', 'Pa_id', 'visters.created_at', 'From', 'visters.id', 'visters.status')
                 ->join('recp__pas', 'recp__pas.id', '=', 'visters.Pa_id')
                  ->where('visters.To', '=' , 'lab1')
                 ->where('visters.status', '=' , 1)
                 ->orwhere('visters.status', '=', 2)              
                 ->orderBy('visters.created_at', 'desc')
                 ->paginate(10);
    return view('Lab.viewPa', compact('Pa'));
}
public function singlePa () {
    return view('Lab.pa');
}
public function Store (Request $request){
    $request->validate([

    ]);
    $da = implode(",", $request->res);
    Vister::where('id', $request->id)->update([
        'lab_result' => $da, 
        'status' => 2     
    ]);
    return back()->with('Lab_Add', 'Result Added Successfuly');
}
public function Send (Request $request){
    $status = Lab_Pa::where('id', $request->id)->pluck('status');
    $num  = $status[0];
    if($num == '0'){
    Lab_pa::where('id', $request->id)->update([
                          'status' => 1
    ]);
   return back()->with('Doc_send', 'Request Sent To Doctor');
    }
    else{
      return back()->with('Docc_send', 'Request Sent aledy sent');
    }
}
}
