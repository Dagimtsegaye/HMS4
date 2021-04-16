<?php

namespace App\Http\Controllers\Phar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doc_Pa;
use App\Models\Recp_Pa;

class PharPaController extends Controller
{
    public function DashBord () {
        return view('Phar.DashBord');
    }
    public function viewPa () {
        $Pa = Doc_Pa::select('C_number', 'fname', 'mname', 'sex', 'Pre', 'doc__pas.created_at' )
                    ->join('recp__pas', 'recp__pas.id', '=', 'doc__pas.Pa_id')->paginate(5);              
        return view('Phar.viewPa', compact('Pa'));
    }
    public function singelPa () {
        return view('Phar.Pa');
    }
}
