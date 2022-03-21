<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
class HomeController extends Controller
{
    public function index(Request $request)
    {

         if ($request->ajax()) {
            $data = Lead::get();
            return datatables()->of($data)->make(true);
        }

        return view('admin.lead.index');
    }

    public function create()
    {

        return view('admin.lead.create');

    }

     public function store(Request $request)
    {

        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'source'=>$request->source,
            'status'=>$request->status,

        );

        Lead::insert($data);

        return redirect('/');

    }

    public function edit($id)
    {
        $data=lead::where('id','=',$id)->get();

        return view('admin.lead.edit', compact('data'));

    }

    public function update(Request $request)
    {

        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'source'=>$request->source,
            'status'=>$request->status,

        );

        Lead::where('id', '=',$request->id)->update($data);

        return redirect('/');

    }

     public function delete($id)
    {
        lead::where('id','=',$id)->delete();

        return redirect('/');

    }
}
