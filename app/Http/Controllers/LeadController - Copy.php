<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
class LeadController extends Controller
{
    public function index(Request $request)
    {

         if ($request->ajax()) {
            $data = Lead::get();
            return datatables()->of($data)->make(true);
        }

        return view('admin.lead.index');
    }
     public function index(Request $request)
    {

    }
}
