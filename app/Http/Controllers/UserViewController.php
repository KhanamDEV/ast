<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Excel;
use Carbon\Carbon;


class UserViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {


       //print_r("ngoc");

        // for ($i=1; $i <= 3005; $i++) { 
        //     $number = sprintf('%04d',$i);
        //     //http://bongdaphui.net/caodulieubaiviet-3003.html
        // print "http://bongdaphui.net/caodulieubaiviet-".$number.".html";
        // print_r("<br>");
        // }


        // die();
        $data = User::get()->toArray();
        return view('admin.userview.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('admin.userview.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.userview.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userview = User::find($id);
        $userview->name = $request->name;
        $userview->email = $request->email;
        $userview->title = $request->title;
        $userview->street = $request->street;
        $userview->postcode = $request->postcode;
        $userview->city = $request->city;
        $userview->country = $request->country;
        $userview->stage = $request->stage;
        $userview->phone = $request->phone;
        $userview->status = $request->status;
        $userview->save();
        return redirect()->action('UserViewController@index')->with('message', 'Users Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
