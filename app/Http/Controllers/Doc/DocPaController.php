<?php

namespace App\Http\Controllers\Doc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doc_Pa;
use App\Models\Recp_Pa;
use App\Models\Lab_Pa;
use App\Models\Vister;

class DocPaController extends Controller
{
 public function DashBord () {
     return view('Doc.Doc_Dash');
 }
 public function viewPa () {
     $Pa = Recp_Pa::where('status', 0)->orwhere('status', 2)->paginate(5);
     return view('Doc.viewPa', compact('Pa'));
    

 }
 public function singelPa (Request $request) {
     $Pa = Recp_Pa::find($request->id);
     $Doc = Doc_Pa::where('Pa_id', $request->id)->first();
     $Lab_test = Vister::where('Pa_id', $request->id)->get();             
     return view('Doc.Pa', compact('Pa', 'Doc', 'Lab_test'));

 }
 public function Store (Request $request) {
    $request->validate([

    ]);  
    if(Doc_Pa::where('Pa_id', $request->Pa_id)->first()){
        return back()-> with('error', 'This Information is Inserted Before, Pleas Press Update Button To Update The Information');
    }
    else{
    $Syp = implode(",", $request->Syp); // implode function returns string from array
    $Pre = implode(",", $request->Pre);
    Doc_Pa::create([
        'Dia' => $request->Dia,
        'His' => $request->His,
        'Pre' => $Pre,
        'Syp' => $Syp,
        'Pa_id' => $request->Pa_id,       
    ]);
    return back()->with('Doc', 'Information Added');
    }
 }
 public function StoreLab (Request $request) {
     $lab_test = implode(",", $request->lab_test);
     Vister::create([
         'Lab_test' => $lab_test,
         'To' => $request->to,
         'From' => $request->from,
         'Pa_id' => $request->Pa_id
     ]);
     return back()->with('Doc', 'Information Added');

 }
 public function SendToLab (Request $request){
      if(Vister::where('id', '=' ,$request->id)->where('status','=' ,1)->first() == ""){
                    Vister::where('id', $request->id)->update([
                            'status' => 1
      ]);
       return back()->with('Doc_send', 'Request Sent To Laboratory');
      }
      else{
        return back()->with('Docc_send', 'Request  aledy sent');
      }
 }
 public function Update (Request $request){
    $Syp = implode(",", $request->Syp); // implode function returns string from array
    $Pre = implode(",", $request->Pre);
     Doc_Pa::find($request->DocPa_id)->update([
        'Dia' => $request->Dia,
        'His' => $request->His,
        'Pre' => $Pre,
        'Syp' => $Syp,
     
     ]);
     return back()->with('Update', 'Information Updated Successfully');
 }
 public function PaConfirm (Request $request){
     Recp_Pa::where('id', $request->id)->update([
         'status' => 2
     ]);
     return back();
 }

 }
