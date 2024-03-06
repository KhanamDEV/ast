<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Controllers\Controller;
use Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Redirect;

class ContactController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');

       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 2) {
            return redirect('/home');
        }
        $data = Contact::get()->toArray();
        return view('admin.contacts.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        if ($user->role == 2) {
            return redirect('/home');
        }
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user->role == 2) {
            return redirect('/home');
        }
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->detail = $request->detail;
        $contact->save();
        return redirect()->action('ContactController@index')->with('message', 'Contact Add Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $user = Auth::user();
        if ($user->role == 2) {
            return redirect('/home');
        }
         $data = Contact::find($id);
         return view('admin.contacts.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        if ($user->role == 2) {
            return redirect('/home');
        }
        $data = Contact::find($id);
        //print_r($data);
        return view('admin.contacts.edit',['data'=>$data]);
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
        //
        $user = Auth::user();
        if ($user->role == 2) {
            return redirect('/home');
        }
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->detail = $request->detail;
        $contact->save();
        return redirect()->action('ContactController@index')->with('message', 'Contact Update Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        if ($user->role == 2) {
            return redirect('/home');
        }
        $pricetable = Contact::find($id);
        $pricetable->delete();
         return redirect()->action('ContactController@index')->with('message', 'Delete record Success');
    }
}
