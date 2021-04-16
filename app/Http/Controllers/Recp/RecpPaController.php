<?php

namespace App\Http\Controllers\Recp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recp_Pa;

class RecpPaController extends Controller
{
    public function index (){
        return view('Recp.AddPa');
    }
    public function viewPa () {
        $Pa = Recp_Pa::paginate(10);
        return view('Recp.viewPa', compact('Pa'));
    }
    public function Store(Request $request) {
        $request->validate([

        ]);
       Recp_Pa::create($request->all());
       return back()->with('Pa_Created', 'Patient Created Successfully');
        
    }
    public Function StatusUpdate(Request $request){
        Recp_Pa::where('id', $request->id)->update([
                'status' => 0
        ]);
        return back()->with('sent', 'Sent Successfully');
    }
}


