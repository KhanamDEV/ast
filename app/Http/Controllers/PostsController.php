<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\;
use App\Http\Controllers\Controller;
use Excel;
use Carbon\Carbon;

class PostsController extends Controller
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
       // $data = Contact::get()->toArray();

        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];    

        $client = new \GuzzleHttp\Client();

        $apigetCategorycurrent = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcruiselistNewSite?key=9A8YD9TRAVELAIS91', $requestContent);
        $responseapigetCategorycurrent = json_decode($apigetCategorycurrent->getBody());
        $data = $responseapigetCategorycurrent;
        // print_r($data);
        // die();
        // $data = array();
        return view('admin.posts.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
        //
     //   print_r($request->all());
      //  die();
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
        //
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
        //
        $pricetable = Contact::find($id);
        $pricetable->delete();
         return redirect()->action('ContactController@index')->with('message', 'Delete record Success');
    }
}
