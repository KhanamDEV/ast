<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PriceTableCruise;
use App\Http\Controllers\Controller;
use Excel;
use Carbon\Carbon;

class PriceTableController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = PriceTableCruise::get()->toArray();
        return view('admin.pricetable.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.pricetable.create');
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
        $pricetable = new PriceTableCruise;
        $pricetable->tripcode = $request->tripcode;
        $pricetable->ship = $request->ship;
        $pricetable->shipcategory = $request->shipcategory;
        $pricetable->cabintype = $request->cabintype;
        $pricetable->startdate = $request->startdate;
        $pricetable->enddate = $request->enddate;
        $pricetable->pricepptwin = $request->pricepptwin;
        $pricetable->pricesinge = $request->pricesinge;
        $pricetable->availablecabins = $request->availablecabins;
        $pricetable->special = $request->special;
        $pricetable->status = $request->status;
        $pricetable->save();
        return redirect()->action('PriceTableController@index')->with('message', 'Price Table Add Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = PriceTableCruise::find($id);
         return view('admin.pricetable.show',['data'=>$data]);
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
        $data = PriceTableCruise::find($id);
        //print_r($data);
        return view('admin.pricetable.edit',['data'=>$data]);
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

        $pricetable = PriceTableCruise::find($id);
        $pricetable->tripcode = $request->tripcode;
        $pricetable->ship = $request->ship;
        $pricetable->shipcategory = $request->shipcategory;
        $pricetable->cabintype = $request->cabintype;
        $pricetable->startdate = $request->startdate;
        $pricetable->enddate = $request->enddate;
        $pricetable->pricepptwin = $request->pricepptwin;
        $pricetable->pricesinge = $request->pricesinge;
        $pricetable->availablecabins = $request->availablecabins;
        $pricetable->special = $request->special;
        $pricetable->status = $request->status;
        $pricetable->save();
        return redirect()->action('PriceTableController@index')->with('message', 'Price Table Update Success');

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
        $pricetable = PriceTableCruise::find($id);
        $pricetable->delete();
         return redirect()->action('PriceTableController@index')->with('message', 'Delete record Success');
    }

    public function imports()
    {
        return view('admin.pricetable.import');
    }


    public function importExcel(Request $request)
    {


        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();


            $data = Excel::load($path, function($reader) {})->get();

          //  print_r($data);
           // die();
            if(!empty($data) && $data->count()){


                foreach ($data->toArray() as $key => $v) {
                    if(!empty($v)){
                            $insert[] = [
                                'tripcode' => $v['tripcode'],
                                'ship' => $v['ship'],
                                'shipcategory' => $v['shipcategory'],
                                'cabintype' => $v['cabintype'],
                                'startdate' => $v['startdate']->toDateString(),
                                'enddate' => $v['enddate']->toDateString(),
                                'pricepptwin' => $v['pricepptwin'],
                                'pricesinge' => $v['pricesinge'],
                                'availablecabins' => $v['availablecabins'],
                                'special' => $v['special'],
                                'status' => $v['status']
                            ];
                    }
                }
                
                if(!empty($insert)){
                   PriceTableCruise::insert($insert);
                   return back()->with('success','Insert Record successfully.');
                }


            }


        }


        return back()->with('error','Please Check your file, Something is wrong there.');
    }

}
